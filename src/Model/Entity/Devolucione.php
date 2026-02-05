<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Devolucione Entity
 *
 * @property int $id
 * @property int $colegio_id
 * @property int $alumno_id
 * @property float|null $importe
 * @property string|null $concepto
 * @property string|null $actividad
 * @property string|null $observ
 * @property \Cake\I18n\Date $fecha_dev
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\Colegio $colegio
 * @property \App\Model\Entity\Alumno $alumno
 */
class Devolucione extends Entity
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
        'colegio_id' => true,
        'alumno_id' => true,
        'importe' => true,
        'concepto' => true,
        'actividad' => true,
        'observ' => true,
        'fecha_dev' => true,
        'created' => true,
        'modified' => true,
        'colegio' => true,
        'alumno' => true,
    ];
}
