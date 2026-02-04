<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ofertaspreciosact Entity
 *
 * @property int $id
 * @property string $nom_activitat
 * @property string|null $grupo
 * @property float $start
 * @property float $basic
 * @property float $advance
 * @property float $premium
 * @property float $premium_plus
 * @property string $ratio
 * @property string $material_observ
 * @property bool $accion_horario
 * @property bool $accion_ubicacion
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Oferta[] $ofertas
 */
class Ofertaspreciosact extends Entity
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
        'nom_activitat' => true,
        'grupo' => true,
        'start' => true,
        'basic' => true,
        'advance' => true,
        'premium' => true,
        'premium_plus' => true,
        'ratio' => true,
        'material_observ' => true,
        'accion_horario' => true,
        'accion_ubicacion' => true,
        'created' => true,
        'modified' => true,
        'ofertas' => true,
    ];
}
