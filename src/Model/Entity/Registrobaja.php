<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registrobaja Entity
 *
 * @property int $id
 * @property int $alumno_id
 * @property int $activitatsgrup_id
 * @property int $colegio_id
 * @property \Cake\I18n\Date $fecha_baja
 * @property string $motivo
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string|null $observ
 * @property bool $ejecutada
 *
 * @property \App\Model\Entity\Alumno $alumno
 * @property \App\Model\Entity\Activitatsgrup $activitatsgrup
 * @property \App\Model\Entity\Colegio $colegio
 */
class Registrobaja extends Entity
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
        'activitatsgrup_id' => true,
        'colegio_id' => true,
        'fecha_baja' => true,
        'motivo' => true,
        'created' => true,
        'modified' => true,
        'observ' => true,
        'ejecutada' => true,
        'alumno' => true,
        'activitatsgrup' => true,
        'colegio' => true,
    ];
}
