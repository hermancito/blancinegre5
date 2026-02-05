<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActivitatsMonitor Entity
 *
 * @property int $id
 * @property int $activitat_id
 * @property int $monitor_id
 *
 * @property \App\Model\Entity\Activitat $activitat
 * @property \App\Model\Entity\Monitor $monitor
 * @property \App\Model\Entity\Activitatsgrup[] $activitatsgrups
 */
class ActivitatsMonitor extends Entity
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
        'monitor_id' => true,
        'activitat' => true,
        'monitor' => true,
        'activitatsgrups' => true,
    ];
}
