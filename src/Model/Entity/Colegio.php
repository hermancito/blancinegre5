<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Colegio Entity
 *
 * @property int $id
 * @property string $codigo
 * @property string $username
 * @property string|null $direccion
 * @property string|null $cp
 * @property string|null $poblacion
 * @property string|null $eq_directivo
 * @property int|null $tfno_eqdirect
 * @property string|null $email_eqdirectivo
 * @property string|null $pdte_ampa
 * @property int|null $tfno_pdte
 * @property string|null $email_pdte
 * @property string|null $resp_act
 * @property int|null $tfno_resp
 * @property string|null $email_resp
 * @property string|null $conserge
 * @property int|null $tfno_conserge
 * @property string|null $email_conserge
 * @property string|null $email_centro
 * @property string|null $cif_centro
 * @property string|null $email_ampa
 * @property string|null $cif_ampa
 * @property string|null $cesion_llaves
 * @property int|null $unidades_llaves
 * @property string|null $alarma
 * @property string|null $iban_centro
 * @property string|null $iban_ampa
 * @property string|null $observ
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property int|null $tablaspreciosvble_id
 * @property float $suplemento_nosocios
 * @property float $porcentaje_nosocios
 * @property bool $mostrar_cuota
 * @property bool $dcto_hermanos
 *
 * @property \App\Model\Entity\Tablaspreciosvble $tablaspreciosvble
 * @property \App\Model\Entity\Activitatsgrup[] $activitatsgrups
 * @property \App\Model\Entity\AlumnosXml[] $alumnos_xml
 * @property \App\Model\Entity\Colegiofile[] $colegiofiles
 * @property \App\Model\Entity\Colegiofilesfamilia[] $colegiofilesfamilias
 * @property \App\Model\Entity\Coordinadordiari[] $coordinadordiaris
 * @property \App\Model\Entity\Devolucione[] $devoluciones
 * @property \App\Model\Entity\Notificacion[] $notificacions
 * @property \App\Model\Entity\Personalcontrol[] $personalcontrols
 * @property \App\Model\Entity\Registroalta[] $registroaltas
 * @property \App\Model\Entity\Registrobaja[] $registrobajas
 * @property \App\Model\Entity\Sustitucion[] $sustitucions
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Activitat[] $activitats
 * @property \App\Model\Entity\Coordinador[] $coordinadors
 * @property \App\Model\Entity\Monitor[] $monitors
 * @property \App\Model\Entity\Notifcolegio[] $notifcolegios
 */
class Colegio extends Entity
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
        'direccion' => true,
        'cp' => true,
        'poblacion' => true,
        'eq_directivo' => true,
        'tfno_eqdirect' => true,
        'email_eqdirectivo' => true,
        'pdte_ampa' => true,
        'tfno_pdte' => true,
        'email_pdte' => true,
        'resp_act' => true,
        'tfno_resp' => true,
        'email_resp' => true,
        'conserge' => true,
        'tfno_conserge' => true,
        'email_conserge' => true,
        'email_centro' => true,
        'cif_centro' => true,
        'email_ampa' => true,
        'cif_ampa' => true,
        'cesion_llaves' => true,
        'unidades_llaves' => true,
        'alarma' => true,
        'iban_centro' => true,
        'iban_ampa' => true,
        'observ' => true,
        'created' => true,
        'modified' => true,
        'tablaspreciosvble_id' => true,
        'suplemento_nosocios' => true,
        'porcentaje_nosocios' => true,
        'mostrar_cuota' => true,
        'dcto_hermanos' => true,
        'tablaspreciosvble' => true,
        'activitatsgrups' => true,
        'alumnos_xml' => true,
        'colegiofiles' => true,
        'colegiofilesfamilias' => true,
        'coordinadordiaris' => true,
        'devoluciones' => true,
        'notificacions' => true,
        'personalcontrols' => true,
        'registroaltas' => true,
        'registrobajas' => true,
        'sustitucions' => true,
        'users' => true,
        'activitats' => true,
        'coordinadors' => true,
        'monitors' => true,
        'notifcolegios' => true,
    ];
}
