<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notifmonitor Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $nombre
 * @property string|null $descripc
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property bool $validado
 * @property string|null $comodin
 * @property string $tipo_monitor
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Notifmonitor extends Entity
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
        'user_id' => true,
        'nombre' => true,
        'descripc' => true,
        'photo' => true,
        'photo_dir' => true,
        'validado' => true,
        'comodin' => true,
        'tipo_monitor' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
