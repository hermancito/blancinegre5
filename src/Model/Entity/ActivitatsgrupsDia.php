<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ActivitatsgrupsDia Entity
 *
 * @property int $id
 * @property int $activitatsgrup_id
 * @property int $dia_id
 * @property \Cake\I18n\Time|null $hora_ini
 * @property \Cake\I18n\Time|null $hora_fin
 *
 * @property \App\Model\Entity\Activitatsgrup $activitatsgrup
 * @property \App\Model\Entity\Dia $dia
 */
class ActivitatsgrupsDia extends Entity
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
        'activitatsgrup_id' => true,
        'dia_id' => true,
        'hora_ini' => true,
        'hora_fin' => true,
        'activitatsgrup' => true,
        'dia' => true,
    ];
}
