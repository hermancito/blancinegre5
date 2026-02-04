<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tiponodisponibilitat Entity
 *
 * @property int $id
 * @property string $descripc
 * @property string $color
 *
 * @property \App\Model\Entity\Disponibilitat[] $disponibilitats
 */
class Tiponodisponibilitat extends Entity
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
        'descripc' => true,
        'color' => true,
        'disponibilitats' => true,
    ];
}
