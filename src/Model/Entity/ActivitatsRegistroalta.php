<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActivitatsRegistroalta Entity
 *
 * @property int $id
 * @property int $registroalta_id
 * @property int $activitat_id
 *
 * @property \App\Model\Entity\Registroalta $registroalta
 * @property \App\Model\Entity\Activitat $activitat
 */
class ActivitatsRegistroalta extends Entity
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
        'registroalta_id' => true,
        'activitat_id' => true,
        'registroalta' => true,
        'activitat' => true,
    ];
}
