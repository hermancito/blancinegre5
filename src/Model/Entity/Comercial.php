<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comercial Entity
 *
 * @property int $id
 * @property string $codigo
 * @property string $nom_centro
 * @property string $localidad
 * @property int|null $agente_id
 * @property string|null $estado
 * @property string|null $jornada
 * @property int|null $pax
 * @property string|null $control_admon
 * @property string|null $comarca
 * @property string|null $tipo_via
 * @property string|null $direccion
 * @property string|null $num
 * @property string|null $cp
 * @property string|null $provincia
 * @property string|null $tfno
 * @property string|null $fax
 * @property string|null $cif
 * @property string|null $gestion_actual
 * @property string|null $email_centro
 * @property string|null $contacto1_cargo
 * @property string|null $contacto1_nom_tfno
 * @property string|null $contacto1_mail
 * @property string|null $contacto2_cargo
 * @property string|null $contacto2_nom_tfno
 * @property string|null $contacto2_mail
 * @property string|null $contacto3_datos
 * @property bool|null $matinal
 * @property bool|null $mediodia
 * @property bool|null $j_continua
 * @property bool|null $tardes
 * @property bool|null $jun_sept
 * @property bool|null $vacacionales
 * @property string|null $plant_comercial
 * @property string|null $historial_citas_observ
 * @property string|null $ini_cto
 * @property string|null $ini_cto_agente
 * @property string|null $fin_cto
 * @property string|null $fin_cto_agente
 * @property int|null $empresa_id
 * @property int|null $empresados_id
 * @property int|null $empresatres_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Agente $agente
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Empresasdo $empresado
 * @property \App\Model\Entity\Empresastre $empresatre
 * @property \App\Model\Entity\Comercialsarxius[] $comercialsarxius
 * @property \App\Model\Entity\Oferta[] $ofertas
 */
class Comercial extends Entity
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
        'nom_centro' => true,
        'localidad' => true,
        'agente_id' => true,
        'estado' => true,
        'jornada' => true,
        'pax' => true,
        'control_admon' => true,
        'comarca' => true,
        'tipo_via' => true,
        'direccion' => true,
        'num' => true,
        'cp' => true,
        'provincia' => true,
        'tfno' => true,
        'fax' => true,
        'cif' => true,
        'gestion_actual' => true,
        'email_centro' => true,
        'contacto1_cargo' => true,
        'contacto1_nom_tfno' => true,
        'contacto1_mail' => true,
        'contacto2_cargo' => true,
        'contacto2_nom_tfno' => true,
        'contacto2_mail' => true,
        'contacto3_datos' => true,
        'matinal' => true,
        'mediodia' => true,
        'j_continua' => true,
        'tardes' => true,
        'jun_sept' => true,
        'vacacionales' => true,
        'plant_comercial' => true,
        'historial_citas_observ' => true,
        'ini_cto' => true,
        'ini_cto_agente' => true,
        'fin_cto' => true,
        'fin_cto_agente' => true,
        'empresa_id' => true,
        'empresados_id' => true,
        'empresatres_id' => true,
        'created' => true,
        'modified' => true,
        'agente' => true,
        'empresa' => true,
        'empresado' => true,
        'empresatre' => true,
        'comercialsarxius' => true,
        'ofertas' => true,
    ];
}
