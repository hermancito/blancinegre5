<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $codigo
 * @property string|null $username
 * @property string $email
 * @property string $password
 * @property string|null $photo
 * @property string $photo_dir
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property int|null $tfno1
 * @property int|null $tfno2
 * @property string|null $nif
 * @property bool $validado
 * @property bool $bolsa
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property bool $datos
 * @property bool $info_mail
 * @property string|null $sexo
 * @property string|null $seg_soc
 * @property string|null $iban
 * @property string|null $cuenta
 * @property string|null $direccion
 * @property string|null $poblacion
 * @property string|null $cod_postal
 * @property string|null $contrato
 * @property \Cake\I18n\Date|null $fecha_ant
 * @property bool|null $carnet_cond
 * @property string|null $vehiculo
 * @property string|null $titulaciones
 * @property string|null $observ
 * @property \Cake\I18n\Date|null $certif_antec
 * @property \Cake\I18n\Date|null $mutua
 * @property int|null $colegio_id
 * @property string|null $token
 * @property \Cake\I18n\Date|null $fecha_nac
 * @property string|null $token_dispositivo
 * @property string|null $niv_ingles
 * @property string|null $niv_valencia
 * @property string|null $disponib
 */
class User extends Entity
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
        'password' => true,
        'photo' => true,
        'photo_dir' => true,
        'nombre' => true,
        'apellidos' => true,
        'tfno1' => true,
        'tfno2' => true,
        'nif' => true,
        'validado' => true,
        'bolsa' => true,
        'created' => true,
        'modified' => true,
        'datos' => true,
        'info_mail' => true,
        'sexo' => true,
        'seg_soc' => true,
        'iban' => true,
        'cuenta' => true,
        'direccion' => true,
        'poblacion' => true,
        'cod_postal' => true,
        'contrato' => true,
        'fecha_ant' => true,
        'carnet_cond' => true,
        'vehiculo' => true,
        'titulaciones' => true,
        'observ' => true,
        'certif_antec' => true,
        'mutua' => true,
        'colegio_id' => true,
        'token' => true,
        'fecha_nac' => true,
        'token_dispositivo' => true,
        'niv_ingles' => true,
        'niv_valencia' => true,
        'disponib' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected array $_hidden = [
        'password',
        'token',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (mb_strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return null;
    }
    
    protected function _getLabel()
    {
        return $this->_properties['nombre'] . ' ' . $this->_properties['apellidos']
            . ' / ' .$this->_properties['username'];
    }
}
