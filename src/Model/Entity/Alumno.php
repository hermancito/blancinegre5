<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alumno Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $user2_id
 * @property int|null $coleg_id
 * @property string $codigo
 * @property string|null $nombre_apellidos
 * @property int|null $anyo
 * @property int|null $tfno
 * @property int|null $movil
 * @property bool|null $activo
 * @property bool|null $socio
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $email
 * @property string|null $cuenta
 * @property string|null $iban
 * @property string|null $titular
 * @property string|null $nif
 * @property string|null $cobro
 * @property int|null $recibo
 * @property string|null $material
 * @property string|null $coment_pub
 * @property string|null $coment_priv
 * @property int|null $ampa
 * @property bool|null $eliminado
 * @property bool|null $comedor
 * @property bool|null $datos
 * @property bool|null $info_mail
 * @property string|null $comodin
 * @property string|null $curso
 * @property float $matricula
 * @property float $no_socio
 * @property float $suplemento
 * @property float $dto_fijo
 * @property float $dto_porcentaje
 * @property float $suma_pfijo
 * @property float $suma_pvble
 * @property float $cuota_previa
 * @property float $cuota
 * @property string|null $nif_alumno
 * @property string|null $merito1
 * @property string|null $merito2
 * @property string|null $merito3
 * @property string|null $merito4
 * @property string|null $merito5
 * @property string|null $ingles_3a
 * @property string|null $ingles_4a
 * @property string|null $ingles_5a
 * @property string|null $ingles_g1
 * @property string|null $ingles_g2
 * @property string|null $ingles_g3
 * @property string|null $ingles_g4
 * @property string|null $ingles_g5
 * @property string|null $ingles_g6
 * @property string|null $ingles_g7
 * @property string|null $ingles_g8
 * @property string|null $ingles_g9
 * @property bool $impago
 * @property string|null $texto_impago
 * @property string|null $sip
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\User $user2
 * @property \App\Model\Entity\Colegio $coleg
 * @property \App\Model\Entity\Asistencia[] $asistencias
 * @property \App\Model\Entity\Boletine[] $boletines
 * @property \App\Model\Entity\Devolucione[] $devoluciones
 * @property \App\Model\Entity\Nota[] $notas
 * @property \App\Model\Entity\Registroalta[] $registroaltas
 * @property \App\Model\Entity\Registrobaja[] $registrobajas
 * @property \App\Model\Entity\Activitat[] $activitats
 * @property \App\Model\Entity\Activitatsgrup[] $activitatsgrups
 * @property \App\Model\Entity\Coordinador[] $coordinadors
 */
class Alumno extends Entity
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
        'user2_id' => true,
        'coleg_id' => true,
        'codigo' => true,
        'nombre_apellidos' => true,
        'anyo' => true,
        'tfno' => true,
        'movil' => true,
        'activo' => true,
        'socio' => true,
        'created' => true,
        'modified' => true,
        'email' => true,
        'cuenta' => true,
        'iban' => true,
        'titular' => true,
        'nif' => true,
        'cobro' => true,
        'recibo' => true,
        'material' => true,
        'coment_pub' => true,
        'coment_priv' => true,
        'ampa' => true,
        'eliminado' => true,
        'comedor' => true,
        'datos' => true,
        'info_mail' => true,
        'comodin' => true,
        'curso' => true,
        'matricula' => true,
        'no_socio' => true,
        'suplemento' => true,
        'dto_fijo' => true,
        'dto_porcentaje' => true,
        'suma_pfijo' => true,
        'suma_pvble' => true,
        'cuota_previa' => true,
        'cuota' => true,
        'nif_alumno' => true,
        'merito1' => true,
        'merito2' => true,
        'merito3' => true,
        'merito4' => true,
        'merito5' => true,
        'ingles_3a' => true,
        'ingles_4a' => true,
        'ingles_5a' => true,
        'ingles_g1' => true,
        'ingles_g2' => true,
        'ingles_g3' => true,
        'ingles_g4' => true,
        'ingles_g5' => true,
        'ingles_g6' => true,
        'ingles_g7' => true,
        'ingles_g8' => true,
        'ingles_g9' => true,
        'impago' => true,
        'texto_impago' => true,
        'sip' => true,
        'user' => true,
        'user2' => true,
        'coleg' => true,
        'asistencias' => true,
        'boletines' => true,
        'devoluciones' => true,
        'notas' => true,
        'registroaltas' => true,
        'registrobajas' => true,
        'activitats' => true,
        'activitatsgrups' => true,
        'coordinadors' => true,
    ];
}
