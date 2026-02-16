<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OfertasOfertaspreciosact Entity
 *
 * @property int $id
 * @property int $ofertaspreciosact_id
 * @property int $oferta_id
 * @property int|null $ofertashorario_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $horario
 *
 * @property \App\Model\Entity\Ofertaspreciosact $ofertaspreciosact
 * @property \App\Model\Entity\Oferta $oferta
 * @property \App\Model\Entity\Ofertashorario $ofertashorario
 */
class OfertasOfertaspreciosact extends Entity
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
        'ofertaspreciosact_id' => true,
        'oferta_id' => true,
        'ofertashorario_id' => true,
        'created' => true,
        'modified' => true,
        'horario' => true,
        'ofertaspreciosact' => true,
        'oferta' => true,
        'ofertashorario' => true,
    ];
}
