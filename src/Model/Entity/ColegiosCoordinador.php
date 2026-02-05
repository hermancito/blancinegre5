<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ColegiosCoordinador Entity
 *
 * @property int $id
 * @property int $colegio_id
 * @property int $coordinador_id
 *
 * @property \App\Model\Entity\Colegio $colegio
 * @property \App\Model\Entity\Coordinador $coordinador
 */
class ColegiosCoordinador extends Entity
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
        'coordinador_id' => true,
        'colegio' => true,
        'coordinador' => true,
    ];
}
