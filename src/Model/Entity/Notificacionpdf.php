<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notificacionpdf Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $notificacion_id
 * @property string $pdf
 * @property string $pdf_dir
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Notificacion $notificacion
 */
class Notificacionpdf extends Entity
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
        'notificacion_id' => true,
        'pdf' => true,
        'pdf_dir' => true,
        'user' => true,
        'notificacion' => true,
    ];
}
