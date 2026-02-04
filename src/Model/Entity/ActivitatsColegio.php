<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActivitatsColegio Entity
 *
 * @property int $id
 * @property int $activitat_id
 * @property int $colegio_id
 *
 * @property \App\Model\Entity\Activitat $activitat
 * @property \App\Model\Entity\Colegio $colegio
 */
class ActivitatsColegio extends Entity
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
        'activitat_id' => true,
        'colegio_id' => true,
        'activitat' => true,
        'colegio' => true,
    ];
}
