<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Volante Entity
 *
 * @property int $id
 * @property int $monitor_id
 * @property string|null $observ
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Monitor $monitor
 * @property \App\Model\Entity\Dia[] $dias
 */
class Volante extends Entity
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
        'monitor_id' => true,
        'observ' => true,
        'created' => true,
        'modified' => true,
        'monitor' => true,
        'dias' => true,
    ];
}
