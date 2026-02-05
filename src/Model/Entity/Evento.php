<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evento Entity
 *
 * @property int $id
 * @property int $user_id
 * @property \Cake\I18n\Date $dia
 * @property \Cake\I18n\Time|null $hora_ini
 * @property \Cake\I18n\Time|null $hora_fin
 * @property string|null $destino
 * @property string|null $observ
 * @property float|null $retribucion
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $comodin1
 * @property string|null $comodin2
 *
 * @property \App\Model\Entity\User $user
 */
class Evento extends Entity
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
        'dia' => true,
        'hora_ini' => true,
        'hora_fin' => true,
        'destino' => true,
        'observ' => true,
        'retribucion' => true,
        'created' => true,
        'modified' => true,
        'comodin1' => true,
        'comodin2' => true,
        'user' => true,
    ];
}
