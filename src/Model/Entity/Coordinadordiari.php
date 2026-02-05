<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coordinadordiari Entity
 *
 * @property int $id
 * @property int $colegio_id
 * @property int $coordinador_id
 * @property \Cake\I18n\Date $dia
 * @property \Cake\I18n\Time|null $hora_ini
 * @property \Cake\I18n\Time|null $hora_fin
 * @property int $intervencion_id
 * @property string|null $observ
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string|null $resuelta
 *
 * @property \App\Model\Entity\Colegio $colegio
 * @property \App\Model\Entity\Coordinador $coordinador
 * @property \App\Model\Entity\Intervencion $intervencion
 */
class Coordinadordiari extends Entity
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
        'colegio_id' => true,
        'coordinador_id' => true,
        'dia' => true,
        'hora_ini' => true,
        'hora_fin' => true,
        'intervencion_id' => true,
        'observ' => true,
        'created' => true,
        'modified' => true,
        'resuelta' => true,
        'colegio' => true,
        'coordinador' => true,
        'intervencion' => true,
    ];
}
