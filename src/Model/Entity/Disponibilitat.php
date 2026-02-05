<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disponibilitat Entity
 *
 * @property int $id
 * @property int $monitor_id
 * @property int $dia_id
 * @property int $hora_id
 * @property int|null $tiponodisponibilitat_id
 * @property int|null $activitatsgrup_id
 * @property bool $disponible
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Monitor $monitor
 * @property \App\Model\Entity\Dia $dia
 * @property \App\Model\Entity\Hora $hora
 * @property \App\Model\Entity\Tiponodisponibilitat $tiponodisponibilitat
 * @property \App\Model\Entity\Activitatsgrup $activitatsgrup
 */
class Disponibilitat extends Entity
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
        'monitor_id' => true,
        'dia_id' => true,
        'hora_id' => true,
        'tiponodisponibilitat_id' => true,
        'activitatsgrup_id' => true,
        'disponible' => true,
        'created' => true,
        'modified' => true,
        'monitor' => true,
        'dia' => true,
        'hora' => true,
        'tiponodisponibilitat' => true,
        'activitatsgrup' => true,
    ];
}
