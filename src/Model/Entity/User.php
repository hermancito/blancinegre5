<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $codigo
 * @property string|null $username
 * @property string $email
 * @property string $password
 * @property string|null $photo
 * @property string|null $photo_dir
 * @property string|null $nombre
 * @property string|null $apellidos
 * @property int|null $tfno1
 * @property int|null $tfno2
 * @property string|null $nif
 * @property bool $validado
 * @property bool $bolsa
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
 * @property \Cake\I18n\FrozenDate $fecha_ant
 * @property bool $carnet_cond
 * @property string|null $vehiculo
 * @property string|null $titulaciones
 * @property string|null $observ
 * @property \Cake\I18n\FrozenDate $certif_antec
 * @property \Cake\I18n\FrozenDate $mutua
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $colegio_id
 * @property string|null $token
 * @property \Cake\I18n\FrozenDate $fecha_nac
 * @property string|null $token_dispositivo
 * @property string|null $niv_ingles
 * @property string|null $niv_valencia
 * @property string|null $disponib
 *
 * @property \App\Model\Entity\Alumno[] $alumnos
 * @property \App\Model\Entity\Nota[] $notas
 * @property \App\Model\Entity\Notificacion[] $notificacions
 * @property \App\Model\Entity\AlumnosXml[] $alumnosXml
 * @property \App\Model\Entity\Boletine[] $boletines
 * @property \App\Model\Entity\Activitat[] $activitats
 * @property \App\Model\Entity\Destino[] $destinos
 * @property \App\Model\Entity\Role[] $roles
 * @property \App\Model\Entity\Notificacionpdf[] $notificacionpdfs
 * @property \App\Model\Entity\Colegiofile[] $colegiofiles
 * @property \App\Model\Entity\Colegiofilesfamilia[] $colegiofilesfamilias
 * @property \App\Model\Entity\Coordinadorsfile[] $coordinadorsfile
 * @property \App\Model\Entity\Monitorsfile[] $monitorsfiles
 * @property \App\Model\Entity\Colegio $colegio
 * @property \App\Model\Entity\Salario[] $salarios
 * @property \App\Model\Entity\Evento $evento
 * @property \App\Model\Entity\Sustitucion $sustitucion
 * @property \App\Model\Entity\Personalcontrol $personalcontrol
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
        'ult_rev' => true,
        'created' => true,
        'modified' => true,
        'alumnos' => true,
        'notas' => true,
        'notificacions' => true,
        'boletines' => true,
        'activitats' => true,
        'destinos' => true,
        'roles' => true,
        'alumnosXml' => true,
        'notificacionpdfs' => true,
        'colegiofiles' => true,
        'colegiofilesfamilias' => true,
        'coordinadorsfile' => true,
        'monitorsfiles' => true,
        'colegio_id' => true,
        'colegio' => true,
        'token' => true,
        'salarios' => true,
        'evento' => true,
        'sustitucion' => true,
        'personalcontrol' => true,
        'fecha_nac' => true,
        'token_dispositivo'=>true,
        'niv_ingles'=>true,
        'niv_valencia'=>true,
        'disponib'=>true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string, bool>
     */
    protected array $_hidden = [
        'password'
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