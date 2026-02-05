<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActivitatsMonitorsActivitatsgrup Entity
 *
 * @property int $id
 * @property int $activitats_monitor_id
 * @property int $activitatsgrup_id
 *
 * @property \App\Model\Entity\ActivitatsMonitor $activitats_monitor
 * @property \App\Model\Entity\Activitatsgrup $activitatsgrup
 */
class ActivitatsMonitorsActivitatsgrup extends Entity
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
        'activitats_monitor_id' => true,
        'activitatsgrup_id' => true,
        'activitats_monitor' => true,
        'activitatsgrup' => true,
    ];
}
