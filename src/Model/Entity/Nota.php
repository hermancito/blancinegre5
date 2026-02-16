<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nota Entity
 *
 * @property int $id
 * @property int $alumno_id
 * @property string|null $comodin
 * @property int $user_id
 * @property int $activitat_id
 * @property int|null $cuatrim
 * @property int|null $anyo
 * @property string $curso
 * @property string|null $objetivos
 * @property string|null $contenidos
 * @property string|null $atencion
 * @property string|null $participa
 * @property string|null $ejerc
 * @property string|null $asist
 * @property string|null $actitud
 * @property string|null $respeto
 * @property bool $validado
 * @property string|null $comentarios_boletin
 * @property string|null $contenidos_boletin
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Alumno $alumno
 * @property \App\Model\Entity\Boletine[] $boletines
 * @property \App\Model\Entity\Activitat[] $activitats
 */
class Nota extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'alumno_id' => true,
        'comodin' => true,
        'user_id' => true,
        'activitat_id' => true,
        'cuatrim' => true,
        'anyo' => true,
        'curso' => true,
        'objetivos' => true,
        'contenidos' => true,
        'atencion' => true,
        'participa' => true,
        'ejerc' => true,
        'asist' => true,
        'actitud' => true,
        'respeto' => true,
        'comentarios_boletin' => true,
        'contenidos_boletin' => true,
        'validado' => true,
        'created' => true,
        'modified' => true,
        'alumno' => true,
        'user' => true,
        'boletines' => true
    ];

    protected function _getLabel()
    {
        return $this->_properties['alumno_id']  . ' /Evaluación: ' .$this->_properties['cuatrim']. ' /Año: ' .$this->_properties['anyo'];
    }
}