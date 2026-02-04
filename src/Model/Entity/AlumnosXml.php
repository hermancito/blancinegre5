<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AlumnosXml Entity
 *
 * @property int $id
 * @property int $colegio_id
 * @property string $xmlfile
 * @property string $xmlfile_dir
 * @property bool $grabado
 *
 * @property \App\Model\Entity\Colegio $colegio
 */
class AlumnosXml extends Entity
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
        'xmlfile' => true,
        'xmlfile_dir' => true,
        'grabado' => true,
        'colegio' => true,
    ];
}
