<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DiasVolante Entity
 *
 * @property int $id
 * @property int $dia_id
 * @property int $volante_id
 * @property \Cake\I18n\Time|null $hora_ini
 * @property \Cake\I18n\Time|null $hora_fin
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Dia $dia
 * @property \App\Model\Entity\Volante $volante
 */
class DiasVolante extends Entity
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
        'dia_id' => true,
        'volante_id' => true,
        'hora_ini' => true,
        'hora_fin' => true,
        'created' => true,
        'modified' => true,
        'dia' => true,
        'volante' => true,
    ];
}
