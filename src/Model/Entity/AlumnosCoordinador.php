<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AlumnosCoordinador Entity
 *
 * @property int $id
 * @property int $alumno_id
 * @property int $coordinador_id
 *
 * @property \App\Model\Entity\Alumno $alumno
 * @property \App\Model\Entity\Coordinador $coordinador
 */
class AlumnosCoordinador extends Entity
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
        'coordinador_id' => true,
        'alumno' => true,
        'coordinador' => true,
    ];
}
