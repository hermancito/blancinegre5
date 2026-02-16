<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfertasTip Entity
 *
 * @property int $id
 * @property int $oferta_id
 * @property int $tip_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Oferta $oferta
 * @property \App\Model\Entity\Tip $tip
 */
class OfertasTip extends Entity
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
        'oferta_id' => true,
        'tip_id' => true,
        'created' => true,
        'modified' => true,
        'oferta' => true,
        'tip' => true,
    ];
}
