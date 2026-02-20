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

use Cake\Controller\Controller;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/5/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/5/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event): void
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check
        $this->Authentication->allowUnauthenticated(['index', 'view']);
        $this->set('current_user', $this->Authentication->getIdentity());
        $rolesusuario = $this->rolesxuser($this->Authentication->getIdentity());
        if (count($rolesusuario)==1){
            if ($this->isAdmin($this->Authentication->getIdentity()) === true){
                $this->set('admin_user', $this->Authentication->getIdentity());
            }
            if ($this->isGestor($this->Authentication->getIdentity()) === true){
                $this->set('gestor_user_auth', $this->Authentication->getIdentity());
            }
            if ($this->isGestorRRHH($this->Authentication->getIdentity()) === true){
                $this->set('gestorRRHH_user_auth', $this->Authentication->getIdentity());
            }
            if ($this->isCoord($this->Authentication->getIdentity()) === true){
                $this->set('coord_user_auth', $this->Authentication->getIdentity());
            }
            if ($this->isSupervisor($this->Authentication->getIdentity()) === true){
                $this->set('superv_user_auth', $this->Authentication->getIdentity());
            }
            if ($this->isEditorAct($this->Authentication->getIdentity()) === true){
                $this->set('editor_act_auth', $this->Authentication->getIdentity());
            }
            if ($this->isVisorAct($this->Authentication->getIdentity()) === true){
                $this->set('visor_act_auth', $this->Authentication->getIdentity());
            }
        }else if(count($rolesusuario)>1){
            if(in_array(1, $rolesusuario)){
                $this->set('admin_user', $this->Authentication->getIdentity());
            }
            if(in_array(6, $rolesusuario)){
                $this->set('gestor_user_auth', $this->Authentication->getIdentity());
            }
            if(in_array(7, $rolesusuario)){
                $this->set('gestorRRHH_user_auth', $this->Authentication->getIdentity());
            }
            if(in_array(8, $rolesusuario)){
                $this->set('editor_act_auth', $this->Authentication->getIdentity());
            }
            if(in_array(6, $rolesusuario) && in_array(5, $rolesusuario)){
                $this->set('gestor_coord_user_auth', $this->Authentication->getIdentity());

            }
            if(in_array(7, $rolesusuario) && in_array(5, $rolesusuario)){
                $this->set('gestorRRHH_user_auth', $this->Authentication->getIdentity());

            }
            if(in_array(7, $rolesusuario) && in_array(6, $rolesusuario)){
                $this->set('gestorRRHH_user_auth', $this->Authentication->getIdentity());

            }
            if(!in_array(6, $rolesusuario) && in_array(5, $rolesusuario)){
                $this->set('coord_user_auth', $this->Authentication->getIdentity());

            }
            if(!in_array(7, $rolesusuario) && !in_array(6, $rolesusuario) && in_array(5, $rolesusuario)){
                $this->set('coord_user_auth', $this->Authentication->getIdentity());
            }
            if(in_array(9, $rolesusuario)){
                $this->set('visor_act_auth', $this->Authentication->getIdentity());
            }
        }
        
        //I18n::setLocale($lang);
    }

    public function isAdmin($user)
    {
        //$this->fetchTable('RolesUsers');
        $esAdmin = false;
        $rolesUser = $this->fetchTable('RolesUsers')->find()
                ->where(['user_id' => $user['id']]);
        foreach ($rolesUser as $rolUser){
            if ($rolUser['role_id'] == 1){
                $esAdmin = true;
            }
        }
        // Administrador can access every action
        if ($esAdmin === true) {
            return true;
        }

        // Default deny
        return false;
    }

    public function isCoord($user)
    {
        //$this->fetchTable('RolesUsers');
        $esAdmin = false;
        $rolesUser = $this->fetchTable('RolesUsers')->find()
            ->where(['user_id' => $user['id']]);
        foreach ($rolesUser as $rolUser){
            if ($rolUser['role_id'] == 5){
                $esAdmin = true;
            }
        }
        // Si es Coordinador puede acceder a la acción
        if ($esAdmin === true) {
            return true;
        }

        // Default deny
        return false;
    }

    public function isGestor($user)
    {
        //$this->fetchTable('RolesUsers');
        $esAdmin = false;
        $rolesUser = $this->fetchTable('RolesUsers')->find()
            ->where(['user_id' => $user['id']]);
        foreach ($rolesUser as $rolUser){
            if ($rolUser['role_id'] == 6){
                $esAdmin = true;
            }
        }
        // Si es Gestor puede acceder a la acción
        if ($esAdmin === true) {
            return true;
        }

        // Default deny
        return false;
    }

    public function isSupervisor($user)
    {
        //$this->fetchTable('RolesUsers');
        $esAdmin = false;
        $rolesUser = $this->fetchTable('RolesUsers')->find()
            ->where(['user_id' => $user['id']]);
        foreach ($rolesUser as $rolUser){
            if ($rolUser['role_id'] == 4){
                $esAdmin = true;
            }
        }
        // Si es Gestor puede acceder a la acción
        if ($esAdmin === true) {
            return true;
        }

        // Default deny
        return false;
    }

    public function isGestorRRHH($user)
    {
        //$this->fetchTable('RolesUsers');
        $esAdmin = false;
        $rolesUser = $this->fetchTable('RolesUsers')->find()
            ->where(['user_id' => $user['id']]);
        foreach ($rolesUser as $rolUser){
            if ($rolUser['role_id'] == 7){
                $esAdmin = true;
            }
        }
        // Si es Gestor puede acceder a la acción
        if ($esAdmin === true) {
            return true;
        }

        // Default deny
        return false;
    }

    public function isEditorAct($user)
    {
        //$this->fetchTable('RolesUsers');
        $esAdmin = false;
        $rolesUser = $this->fetchTable('RolesUsers')->find()
            ->where(['user_id' => $user['id']]);
        foreach ($rolesUser as $rolUser){
            if ($rolUser['role_id'] == 8){
                $esAdmin = true;
            }
        }
        // Si es Editor de actividades puede acceder a la acción
        if ($esAdmin === true) {
            return true;
        }

        // Default deny
        return false;
    }

    public function isVisorAct($user)
    {
        //$this->fetchTable('RolesUsers');
        $esAdmin = false;
        $rolesUser = $this->fetchTable('RolesUsers')->find()
            ->where(['user_id' => $user['id']]);
        foreach ($rolesUser as $rolUser){
            if ($rolUser['role_id'] == 9){
                $esAdmin = true;
            }
        }
        // Si es Visor de actividades puede acceder a la acción
        if ($esAdmin === true) {
            return true;
        }

        // Default deny
        return false;
    }

    public function isAuthorized($user)
    {
        // Administrador can access every action
        if ($this->isAdmin($this->Authentication->getIdentity()) === true) {
            return true;
        }

        // Default deny
        return false;
    }

    public function rolesxuser($user){
        //$this->fetchTable('RolesUsers');
        $idsuser = array();
        $users = $this->fetchTable('RolesUsers')->find()->where(['user_id' => $user['id']]);
        foreach ($users as $user){
            $idsuser[]=$user['role_id'];
        }
        return $idsuser;

    }

    public function alumnosxuser($id = null){
        //$this->fetchTable('Alumnos');
        $idsal = array();
        $alumnos = $this->fetchTable('Alumnos')->find()->where(['user_id' => $id]);
        foreach ($alumnos as $al){
            $idsal[] = $al['id'];
        }
        return $idsal;

    }

    public function cambiacaract($cadena){
        $exp_regular = array();
        $exp_regular[0] = '/&agrave;/';
        $exp_regular[1] = '/&aacute;/';
        $exp_regular[2] = '/&egrave;/';
        $exp_regular[3] = '/&eacute;/';
        $exp_regular[4] = '/&ntilde;/';
        $exp_regular[5] = '/&igrave;/';
        $exp_regular[6] = '/&iacute;/';
        $exp_regular[7] = '/&ograve;/';
        $exp_regular[8] = '/&oacute;/';
        $exp_regular[9] = '/&ugrave;/';
        $exp_regular[10] = '/&uacute;/';
        $exp_regular[11] = '/&Agrave;/';
        $exp_regular[12] = '/&Aacute;/';
        $exp_regular[13] = '/&Egrave;/';
        $exp_regular[14] = '/&Eacute;/';
        $exp_regular[15] = '/&Igrave;/';
        $exp_regular[16] = '/&Iacute;/';
        $exp_regular[17] = '/&Ograve;/';
        $exp_regular[18] = '/&Oacute;/';
        $exp_regular[19] = '/&Ugrave;/';
        $exp_regular[20] = '/&Uacute;/';
        $exp_regular[21] = '/&nbsp;/';
        //cargo en el array los textos que pondremos en la sustitucion
        $cadena_nueva = array();
        $cadena_nueva[0] = 'à';
        $cadena_nueva[1] = 'á';
        $cadena_nueva[2] = 'è';
        $cadena_nueva[3] = 'é';
        $cadena_nueva[4] = 'ñ';
        $cadena_nueva[5] = 'ì';
        $cadena_nueva[6] = 'í';
        $cadena_nueva[7] = 'ò';
        $cadena_nueva[8] = 'ó';
        $cadena_nueva[9] = 'ù';
        $cadena_nueva[10] = 'ú';
        $cadena_nueva[11] = 'À';
        $cadena_nueva[12] = 'Á';
        $cadena_nueva[13] = 'È';
        $cadena_nueva[14] = 'É';
        $cadena_nueva[15] = 'Ì';
        $cadena_nueva[16] = 'Í';
        $cadena_nueva[17] = 'Ò';
        $cadena_nueva[18] = 'Ó';
        $cadena_nueva[19] = 'Ù';
        $cadena_nueva[20] = 'Ú';
        $cadena_nueva[21] = ' ';

        $new_cadena = preg_replace($exp_regular, $cadena_nueva, $cadena);
        return $new_cadena;

    }

    public function changelang($lang = null)
    {
        $this->Cookie->write('lang', $lang);
        return $this->redirect($this->request->referer());
    }
    public function getLang($lang = 'es_ES')
    {
        $lang = $this->Cookie->read('lang');
        if (empty($lang)) { return 'es_ES'; } else return $lang;
    }
}
