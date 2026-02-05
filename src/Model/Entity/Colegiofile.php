<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Colegiofile Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $colegio_id
 * @property string $file
 * @property string $file_dir
 * @property \Cake\I18n\Date $created
 * @property \Cake\I18n\Date $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Colegio $colegio
 */
class Colegiofile extends Entity
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
        'user_id' => true,
        'colegio_id' => true,
        'file' => true,
        'file_dir' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'colegio' => true,
    ];
}
