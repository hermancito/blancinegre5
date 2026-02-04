<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Activitatsgrup Entity
 *
 * @property int $id
 * @property string $codigo
 * @property int $activitat_id
 * @property int|null $colegio_id
 * @property string|null $aula
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string|null $comentarios
 * @property float $tipo_fijo
 * @property float $tipo_vble
 * @property float $sala_fijo
 * @property float $sala_vble
 * @property bool $visible_familias
 * @property string|null $descripc
 * @property bool $aplicar_jornada
 * @property int $alum_min
 * @property int $alum_max
 * @property \Cake\I18n\Date|null $fecha_inicio
 * @property \Cake\I18n\Date|null $fecha_fin
 * @property float $matricula
 *
 * @property \App\Model\Entity\Activitat $activitat
 * @property \App\Model\Entity\Colegio $colegio
 * @property \App\Model\Entity\Asistencia[] $asistencias
 * @property \App\Model\Entity\Disponibilitat[] $disponibilitats
 * @property \App\Model\Entity\Registrobaja[] $registrobajas
 * @property \App\Model\Entity\ActivitatsMonitor[] $activitats_monitors
 * @property \App\Model\Entity\Alumno[] $alumnos
 * @property \App\Model\Entity\Dia[] $dias
 * @property \App\Model\Entity\Jornadasgrup[] $jornadasgrups
 * @property \App\Model\Entity\Monitor[] $monitors
 */
class Activitatsgrup extends Entity
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
        'activitat_id' => true,
        'colegio_id' => true,
        'aula' => true,
        'created' => true,
        'modified' => true,
        'comentarios' => true,
        'tipo_fijo' => true,
        'tipo_vble' => true,
        'sala_fijo' => true,
        'sala_vble' => true,
        'visible_familias' => true,
        'descripc' => true,
        'aplicar_jornada' => true,
        'alum_min' => true,
        'alum_max' => true,
        'fecha_inicio' => true,
        'fecha_fin' => true,
        'matricula' => true,
        'activitat' => true,
        'colegio' => true,
        'asistencias' => true,
        'disponibilitats' => true,
        'registrobajas' => true,
        'activitats_monitors' => true,
        'alumnos' => true,
        'dias' => true,
        'jornadasgrups' => true,
        'monitors' => true,
    ];
}
