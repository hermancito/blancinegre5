<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notificacion Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $activitat_id
 * @property int $colegio_id
 * @property string $nombre
 * @property string|null $descripc
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property bool $validado
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Colegio $colegio
 * @property \App\Model\Entity\Activitat $activitat
 * @property \App\Model\Entity\Notificacionpdf[] $notificacionpdfs
 */
class Notificacion extends Entity
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
        'activitat_id' => true,
        'colegio_id' => true,
        'nombre' => true,
        'descripc' => true,
        'photo' => true,
        'photo_dir' => true,
        'validado' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'colegio' => true,
        'activitat' => true,
        'notificacionpdfs' => true
    ];
}