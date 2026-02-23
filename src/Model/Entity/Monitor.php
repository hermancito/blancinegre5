<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Monitor Entity
 *
 * @property int $id
 * @property string|null $codigo
 * @property string $username
 * @property string $email
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property string|null $poblacion
 * @property int|null $tfno1
 * @property int|null $tfno2
 * @property string|null $nif
 * @property bool $validado
 * @property bool $bolsa
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Disponibilitat[] $disponibilitats
 * @property \App\Model\Entity\Monitorsfile[] $monitorsfiles
 * @property \App\Model\Entity\Sustitucion[] $sustitucions
 * @property \App\Model\Entity\Volante[] $volantes
 * @property \App\Model\Entity\Activitat[] $activitats
 * @property \App\Model\Entity\Activitatsgrup[] $activitatsgrups
 * @property \App\Model\Entity\Colegio[] $colegios
 * @property \App\Model\Entity\Coordinador[] $coordinadors
 */
class Monitor extends Entity
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
        'poblacion' => true,
        'tfno1' => true,
        'tfno2' => true,
        'nif' => true,
        'validado' => true,
        'bolsa' => true,
        'created' => true,
        'modified' => true,
        'disponibilitats' => true,
        'monitorsfiles' => true,
        'sustitucions' => true,
        'volantes' => true,
        'activitats' => true,
        'activitatsgrups' => true,
        'colegios' => true,
        'coordinadors' => true,
    ];

    protected function _getLabel(): ?string
    {
        return $this->_fields['nombre'] . ' ' . $this->_fields['apellidos']
            . ' / ' .$this->_fields['username'];
    }
}
