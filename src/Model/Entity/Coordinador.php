<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coordinador Entity
 *
 * @property int $id
 * @property string|null $codigo
 * @property string $username
 * @property string $email
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property int|null $tfno1
 * @property int|null $tfno2
 * @property string|null $nif
 * @property bool $validado
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Coordinadordiari[] $coordinadordiaris
 * @property \App\Model\Entity\Coordinadorsfile[] $coordinadorsfiles
 * @property \App\Model\Entity\Alumno[] $alumnos
 * @property \App\Model\Entity\Colegio[] $colegios
 * @property \App\Model\Entity\Monitor[] $monitors
 */
class Coordinador extends Entity
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
        'codigo' => true,
        'username' => true,
        'email' => true,
        'nombre' => true,
        'apellidos' => true,
        'tfno1' => true,
        'tfno2' => true,
        'nif' => true,
        'validado' => true,
        'created' => true,
        'modified' => true,
        'coordinadordiaris' => true,
        'coordinadorsfiles' => true,
        'alumnos' => true,
        'colegios' => true,
        'monitors' => true,
    ];
}
