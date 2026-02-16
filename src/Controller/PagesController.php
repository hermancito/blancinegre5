<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/5/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }

        //SCRIPTS PARA ACTUALIZAR CURSOS Y CODIGOS DE LOS ALUMNOS UNA VEZ LLEGADO EL 15 AGOSTO
        $anyo_actual = intval(date("Y"));
        $dia_actual = intval(date("j"));
        $mes_actual = intval(date("n"));
        $this->fetchTable('Actualizautomaticas');
        $existe_act_cursos = $this->Actualizautomaticas->find()->where(['anyo'=>$anyo_actual])
            ->andWhere(['tipo'=>'cursos'])->count();
        if ($dia_actual > 8 && $mes_actual > 6 && $existe_act_cursos == 0){
            $this->croncursos();
        }
        $existe_act_codigos = $this->Actualizautomaticas->find()->where(['anyo'=>$anyo_actual])
            ->andWhere(['tipo'=>'codigos'])->count();
        if ($dia_actual > 8 && $mes_actual > 6 && $existe_act_codigos == 0){
            $this->croncodigos();
        }

        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    //función a ejecutar el 15 de Agosto
    public function croncursos(){
        $this->fetchTable('Alumnos');
        $msg = false;
        $anyo_actual = intval(date("Y"));
        $patron = '/\w{2}\d{1}\w/';
        $cursos_alumnos = $this->Alumnos->find()->select(['id','curso']);
        foreach ($cursos_alumnos as $ca){
            $curso = $ca->curso;
            $curso_actualiz = $ca->curso_actualizado;
            $coincide = preg_match( $patron, $curso );
            if ($curso_actualiz == false){
                if($curso != null && $curso != '' && $coincide == true){
                    if(($curso[2] == '1' || $curso[2] == '2' || $curso[2] == '3' || $curso[2] == '4' || $curso[2] == '5')
                         && ($curso[0] == 'P' && $curso[1] == 'R' )) {
                        $curso[2] = intval($curso[2]) + 1;
                        $new_curso = strval($curso[0]) . strval($curso[1]) . strval($curso[2]) . strval($curso[3]);
                    }else if(($curso[2] == '3' || $curso[2] == '4')
                            && ($curso[0] == 'I' && $curso[1] == 'N' )){
                        $curso[2] = intval($curso[2]) + 1;
                        $new_curso = strval($curso[0]).strval($curso[1]).strval($curso[2]).strval($curso[3]);
                    }else if(($curso[2] == '5') && ($curso[0] == 'I' && $curso[1] == 'N' )){
                        $new_curso = 'PR1'.strval($curso[3]);
                    }else if($curso[2] == '6'){
                        $new_curso = '';
                    }else{
                        $new_curso = $curso;
                    }
                    $query = $this->Alumnos->query();
                    $query->update()
                        ->set(['curso' => $new_curso])
                        ->where(['id' => $ca->id])
                        ->execute();

                }
            }
        }
        $this->fetchTable('Actualizautomaticas');
        $query = $this->Actualizautomaticas->query();
        $query->insert(['tipo', 'anyo'])
            ->values([
                'tipo' => 'cursos',
                'anyo' => $anyo_actual
            ])
            ->execute();

    }

    public function croncodigos(){
        $this->fetchTable('Alumnos');
        $msg = false;
        $anyo_actual = intval(date("Y"));
        $patron = '/\w{4}-\d{6}/';
        $codigos_alumnos = $this->Alumnos->find()->select(['id','codigo']);
        foreach ($codigos_alumnos as $ca){
            $codigo = $ca->codigo;
            $coincide = preg_match( $patron, $codigo );
            if($codigo != null && $codigo != '' && $coincide == true){
                if($codigo[6] == '0' || $codigo[6] == '1' || $codigo[6] == '2' || $codigo[6] == '3' || $codigo[6] == '4'
                    || $codigo[6] == '5' || $codigo[6] == '6' || $codigo[6] == '7' ||  $codigo[6] == '8'){
                    $codigo[6] = intval($codigo[6]) + 1;
                    $new_codigo = strval($codigo[0]).strval($codigo[1]).strval($codigo[2]).strval($codigo[3]).
                        strval($codigo[4]).strval($codigo[5]).strval($codigo[6]).strval($codigo[7]).strval($codigo[8]).
                        strval($codigo[9]).strval($codigo[10]);
                }else if($codigo[6] == '9'){
                    $codigo[5] = intval($codigo[5]) + 1;
                    $codigo[6] = 0;
                    $new_codigo = strval($codigo[0]).strval($codigo[1]).strval($codigo[2]).strval($codigo[3]).
                        strval($codigo[4]).strval($codigo[5]).strval($codigo[6]).strval($codigo[7]).strval($codigo[8]).
                        strval($codigo[9]).strval($codigo[10]);
                }else{
                    $new_codigo = $codigo;
                }
                $query = $this->Alumnos->query();
                $query->update()
                    ->set(['codigo' => $new_codigo])
                    ->where(['id' => $ca->id])
                    ->execute();

            }

        }
        $this->fetchTable('Actualizautomaticas');
        $query = $this->Actualizautomaticas->query();
        $query->insert(['tipo', 'anyo'])
            ->values([
                'tipo' => 'codigos',
                'anyo' => $anyo_actual
            ])
            ->execute();
    }
}
