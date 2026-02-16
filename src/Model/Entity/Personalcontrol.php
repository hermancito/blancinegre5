<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Personalcontrol Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $tipoincidencia_id
 * @property int $actor_id
 * @property int|null $colegio_id
 * @property string|null $descripc
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string|null $comodin1
 * @property string|null $comodin2
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Tipoincidencia $tipoincidencia
 * @property \App\Model\Entity\Actor $actor
 * @property \App\Model\Entity\Colegio $colegio
 */
class Personalcontrol extends Entity
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
        'tipoincidencia_id' => true,
        'actor_id' => true,
        'colegio_id' => true,
        'descripc' => true,
        'created' => true,
        'modified' => true,
        'comodin1' => true,
        'comodin2' => true,
        'user' => true,
        'tipoincidencia' => true,
        'actor' => true,
        'colegio' => true,
    ];
}
