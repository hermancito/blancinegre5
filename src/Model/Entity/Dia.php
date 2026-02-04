<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dia Entity
 *
 * @property int $id
 * @property string|null $nombre
 * @property string|null $descripc
 *
 * @property \App\Model\Entity\Disponibilitat[] $disponibilitats
 * @property \App\Model\Entity\Activitat[] $activitats
 * @property \App\Model\Entity\Activitatsgrup[] $activitatsgrups
 * @property \App\Model\Entity\Volante[] $volantes
 */
class Dia extends Entity
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
        'nombre' => true,
        'descripc' => true,
        'disponibilitats' => true,
        'activitats' => true,
        'activitatsgrups' => true,
        'volantes' => true,
    ];
}
