<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ubicacion Entity
 *
 * @property int $id
 * @property string $intervalo
 * @property string $accion
 * @property float $importe
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Oferta[] $ofertas
 */
class Ubicacion extends Entity
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
        'intervalo' => true,
        'accion' => true,
        'importe' => true,
        'created' => true,
        'modified' => true,
        'ofertas' => true,
    ];
}
