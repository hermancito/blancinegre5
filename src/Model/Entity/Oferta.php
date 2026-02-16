<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Oferta Entity
 *
 * @property int $id
 * @property int $comercial_id
 * @property string|null $tipo_entidad
 * @property int $duracion_contrato
 * @property \Cake\I18n\Date $fecha_firma
 * @property \Cake\I18n\Date $fecha_ini
 * @property string|null $proveedor_unico
 * @property string|null $ofertamos_medidodia
 * @property string|null $ofertamos_matinera
 * @property string|null $tipo_oferta
 * @property string $selecc_contrato
 * @property int $ubicacion_id
 * @property string|null $horario
 * @property float|null $importe
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $email_oferta
 * @property string|null $cif_oferta
 *
 * @property \App\Model\Entity\Comercial $comercial
 * @property \App\Model\Entity\Ubicacion $ubicacion
 * @property \App\Model\Entity\Ofertaspreciosact[] $ofertaspreciosacts
 * @property \App\Model\Entity\Tip[] $tips
 */
class Oferta extends Entity
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
        'comercial_id' => true,
        'tipo_entidad' => true,
        'duracion_contrato' => true,
        'fecha_firma' => true,
        'fecha_ini' => true,
        'proveedor_unico' => true,
        'ofertamos_medidodia' => true,
        'ofertamos_matinera' => true,
        'tipo_oferta' => true,
        'selecc_contrato' => true,
        'ubicacion_id' => true,
        'horario' => true,
        'importe' => true,
        'created' => true,
        'modified' => true,
        'email_oferta' => true,
        'cif_oferta' => true,
        'comercial' => true,
        'ubicacion' => true,
        'ofertaspreciosacts' => true,
        'tips' => true,
    ];
}
