<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Horarimonitor Entity
 *
 * @property int $id
 * @property \Cake\I18n\Date $fecha
 * @property \Cake\I18n\Time $hora
 * @property string $inic_fin
 * @property int $user_id
 * @property string|null $latitud
 * @property string|null $longitud
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Horarimonitor extends Entity
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
        'fecha' => true,
        'hora' => true,
        'inic_fin' => true,
        'user_id' => true,
        'latitud' => true,
        'longitud' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
