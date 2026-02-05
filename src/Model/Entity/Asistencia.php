<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Asistencia Entity
 *
 * @property int $id
 * @property int $alumno_id
 * @property int $activitatsgrup_id
 * @property \Cake\I18n\Date $created
 * @property \Cake\I18n\Date $modified
 *
 * @property \App\Model\Entity\Alumno $alumno
 * @property \App\Model\Entity\Activitatsgrup $activitatsgrup
 */
class Asistencia extends Entity
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
        'created' => true,
        'modified' => true,
        'alumno' => true,
        'activitatsgrup' => true,
    ];
}
