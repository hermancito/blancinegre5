<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comercialsarxius Entity
 *
 * @property int $id
 * @property int $comercial_id
 * @property string $pdf
 * @property string $pdf_dir
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Comercial $comercial
 */
class Comercialsarxius extends Entity
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
        'pdf' => true,
        'pdf_dir' => true,
        'created' => true,
        'modified' => true,
        'comercial' => true,
    ];
}
