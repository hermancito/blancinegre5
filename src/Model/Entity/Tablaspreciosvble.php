<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tablaspreciosvble Entity
 *
 * @property int $id
 * @property string $nombre_tabla
 * @property float $hora1
 * @property float $hora1_media
 * @property float $hora2
 * @property float $hora2_media
 * @property float $hora3
 * @property float $hora3_media
 * @property float $hora4
 * @property float $hora4_media
 * @property float $hora5
 * @property float $hora5_media
 * @property float $hora6
 * @property float $hora6_media
 * @property float $hora7
 * @property float $hora7_media
 * @property float $hora8
 * @property float $hora8_media
 * @property float $hora9
 * @property float $hora9_media
 * @property float $hora10
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Colegio[] $colegios
 */
class Tablaspreciosvble extends Entity
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
        'nombre_tabla' => true,
        'hora1' => true,
        'hora1_media' => true,
        'hora2' => true,
        'hora2_media' => true,
        'hora3' => true,
        'hora3_media' => true,
        'hora4' => true,
        'hora4_media' => true,
        'hora5' => true,
        'hora5_media' => true,
        'hora6' => true,
        'hora6_media' => true,
        'hora7' => true,
        'hora7_media' => true,
        'hora8' => true,
        'hora8_media' => true,
        'hora9' => true,
        'hora9_media' => true,
        'hora10' => true,
        'created' => true,
        'modified' => true,
        'colegios' => true,
    ];
}
