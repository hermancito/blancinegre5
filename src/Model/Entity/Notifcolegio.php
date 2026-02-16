<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notifcolegio Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $nombre
 * @property string|null $descripc
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property bool $validado
 * @property string|null $comodin
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Colegio[] $colegios
 */
class Notifcolegio extends Entity
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
        'created' => true,
        'modified' => true,
        'user' => true,
        'colegios' => true
    ];
}