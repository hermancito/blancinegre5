<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activitat Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $codigo
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Activitatsgrup[] $activitatsgrups
 * @property \App\Model\Entity\Nota[] $notas
 * @property \App\Model\Entity\Notificacion[] $notificacions
 * @property \App\Model\Entity\Sustitucion[] $sustitucions
 * @property \App\Model\Entity\Alumno[] $alumnos
 * @property \App\Model\Entity\Colegio[] $colegios
 * @property \App\Model\Entity\Dia[] $dias
 * @property \App\Model\Entity\Monitor[] $monitors
 * @property \App\Model\Entity\Registroalta[] $registroaltas
 * @property \App\Model\Entity\User[] $users
 */
class Activitat extends Entity
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
        'nombre' => true,
        'codigo' => true,
        'created' => true,
        'modified' => true,
        'activitatsgrups' => true,
        'notas' => true,
        'notificacions' => true,
        'sustitucions' => true,
        'alumnos' => true,
        'colegios' => true,
        'dias' => true,
        'monitors' => true,
        'registroaltas' => true,
        'users' => true,
    ];
}
