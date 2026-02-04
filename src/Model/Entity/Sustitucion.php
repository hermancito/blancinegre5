<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sustitucion Entity
 *
 * @property int $id
 * @property \Cake\I18n\Date $fecha
 * @property \Cake\I18n\Time $hora_ini
 * @property \Cake\I18n\Time $hora_fin
 * @property int|null $monitor_id
 * @property int|null $colegio_id
 * @property int|null $activitat_id
 * @property float|null $coste
 * @property bool $justificada
 * @property string|null $motivo
 * @property int|null $user_id
 * @property float|null $salario
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $comodin1
 * @property string|null $comodin2
 *
 * @property \App\Model\Entity\Monitor $monitor
 * @property \App\Model\Entity\Colegio $colegio
 * @property \App\Model\Entity\Activitat $activitat
 * @property \App\Model\Entity\User $user
 */
class Sustitucion extends Entity
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
        'hora_ini' => true,
        'hora_fin' => true,
        'monitor_id' => true,
        'colegio_id' => true,
        'activitat_id' => true,
        'coste' => true,
        'justificada' => true,
        'motivo' => true,
        'user_id' => true,
        'salario' => true,
        'created' => true,
        'modified' => true,
        'comodin1' => true,
        'comodin2' => true,
        'monitor' => true,
        'colegio' => true,
        'activitat' => true,
        'user' => true,
    ];
}
