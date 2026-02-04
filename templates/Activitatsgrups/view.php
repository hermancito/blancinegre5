<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activitatsgrup $activitatsgrup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitatsgrup'), ['action' => 'edit', $activitatsgrup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitatsgrup'), ['action' => 'delete', $activitatsgrup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitatsgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitatsgrup'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrups view content">
            <h3><?= h($activitatsgrup->codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($activitatsgrup->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $activitatsgrup->hasValue('activitat') ? $this->Html->link($activitatsgrup->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsgrup->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $activitatsgrup->hasValue('colegio') ? $this->Html->link($activitatsgrup->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $activitatsgrup->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Aula') ?></th>
                    <td><?= h($activitatsgrup->aula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripc') ?></th>
                    <td><?= h($activitatsgrup->descripc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsgrup->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Fijo') ?></th>
                    <td><?= $this->Number->format($activitatsgrup->tipo_fijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Vble') ?></th>
                    <td><?= $this->Number->format($activitatsgrup->tipo_vble) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sala Fijo') ?></th>
                    <td><?= $this->Number->format($activitatsgrup->sala_fijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sala Vble') ?></th>
                    <td><?= $this->Number->format($activitatsgrup->sala_vble) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alum Min') ?></th>
                    <td><?= $this->Number->format($activitatsgrup->alum_min) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alum Max') ?></th>
                    <td><?= $this->Number->format($activitatsgrup->alum_max) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matricula') ?></th>
                    <td><?= $this->Number->format($activitatsgrup->matricula) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($activitatsgrup->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($activitatsgrup->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Inicio') ?></th>
                    <td><?= h($activitatsgrup->fecha_inicio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Fin') ?></th>
                    <td><?= h($activitatsgrup->fecha_fin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Visible Familias') ?></th>
                    <td><?= $activitatsgrup->visible_familias ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Aplicar Jornada') ?></th>
                    <td><?= $activitatsgrup->aplicar_jornada ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comentarios') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($activitatsgrup->comentarios)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Activitats Monitors') ?></h4>
                <?php if (!empty($activitatsgrup->activitats_monitors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Activitat Id') ?></th>
                            <th><?= __('Monitor Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitatsgrup->activitats_monitors as $activitatsMonitor) : ?>
                        <tr>
                            <td><?= h($activitatsMonitor->id) ?></td>
                            <td><?= h($activitatsMonitor->activitat_id) ?></td>
                            <td><?= h($activitatsMonitor->monitor_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ActivitatsMonitors', 'action' => 'view', $activitatsMonitor->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ActivitatsMonitors', 'action' => 'edit', $activitatsMonitor->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'ActivitatsMonitors', 'action' => 'delete', $activitatsMonitor->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $activitatsMonitor->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Alumnos') ?></h4>
                <?php if (!empty($activitatsgrup->alumnos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('User2 Id') ?></th>
                            <th><?= __('Coleg Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Nombre Apellidos') ?></th>
                            <th><?= __('Anyo') ?></th>
                            <th><?= __('Tfno') ?></th>
                            <th><?= __('Movil') ?></th>
                            <th><?= __('Activo') ?></th>
                            <th><?= __('Socio') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Cuenta') ?></th>
                            <th><?= __('Iban') ?></th>
                            <th><?= __('Titular') ?></th>
                            <th><?= __('Nif') ?></th>
                            <th><?= __('Cobro') ?></th>
                            <th><?= __('Recibo') ?></th>
                            <th><?= __('Material') ?></th>
                            <th><?= __('Coment Pub') ?></th>
                            <th><?= __('Coment Priv') ?></th>
                            <th><?= __('Ampa') ?></th>
                            <th><?= __('Eliminado') ?></th>
                            <th><?= __('Comedor') ?></th>
                            <th><?= __('Datos') ?></th>
                            <th><?= __('Info Mail') ?></th>
                            <th><?= __('Comodin') ?></th>
                            <th><?= __('Curso') ?></th>
                            <th><?= __('Matricula') ?></th>
                            <th><?= __('No Socio') ?></th>
                            <th><?= __('Suplemento') ?></th>
                            <th><?= __('Dto Fijo') ?></th>
                            <th><?= __('Dto Porcentaje') ?></th>
                            <th><?= __('Suma Pfijo') ?></th>
                            <th><?= __('Suma Pvble') ?></th>
                            <th><?= __('Cuota Previa') ?></th>
                            <th><?= __('Cuota') ?></th>
                            <th><?= __('Nif Alumno') ?></th>
                            <th><?= __('Merito1') ?></th>
                            <th><?= __('Merito2') ?></th>
                            <th><?= __('Merito3') ?></th>
                            <th><?= __('Merito4') ?></th>
                            <th><?= __('Merito5') ?></th>
                            <th><?= __('Ingles 3a') ?></th>
                            <th><?= __('Ingles 4a') ?></th>
                            <th><?= __('Ingles 5a') ?></th>
                            <th><?= __('Ingles G1') ?></th>
                            <th><?= __('Ingles G2') ?></th>
                            <th><?= __('Ingles G3') ?></th>
                            <th><?= __('Ingles G4') ?></th>
                            <th><?= __('Ingles G5') ?></th>
                            <th><?= __('Ingles G6') ?></th>
                            <th><?= __('Ingles G7') ?></th>
                            <th><?= __('Ingles G8') ?></th>
                            <th><?= __('Ingles G9') ?></th>
                            <th><?= __('Impago') ?></th>
                            <th><?= __('Texto Impago') ?></th>
                            <th><?= __('Sip') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitatsgrup->alumnos as $alumno) : ?>
                        <tr>
                            <td><?= h($alumno->id) ?></td>
                            <td><?= h($alumno->user_id) ?></td>
                            <td><?= h($alumno->user2_id) ?></td>
                            <td><?= h($alumno->coleg_id) ?></td>
                            <td><?= h($alumno->codigo) ?></td>
                            <td><?= h($alumno->nombre_apellidos) ?></td>
                            <td><?= h($alumno->anyo) ?></td>
                            <td><?= h($alumno->tfno) ?></td>
                            <td><?= h($alumno->movil) ?></td>
                            <td><?= h($alumno->activo) ?></td>
                            <td><?= h($alumno->socio) ?></td>
                            <td><?= h($alumno->created) ?></td>
                            <td><?= h($alumno->modified) ?></td>
                            <td><?= h($alumno->email) ?></td>
                            <td><?= h($alumno->cuenta) ?></td>
                            <td><?= h($alumno->iban) ?></td>
                            <td><?= h($alumno->titular) ?></td>
                            <td><?= h($alumno->nif) ?></td>
                            <td><?= h($alumno->cobro) ?></td>
                            <td><?= h($alumno->recibo) ?></td>
                            <td><?= h($alumno->material) ?></td>
                            <td><?= h($alumno->coment_pub) ?></td>
                            <td><?= h($alumno->coment_priv) ?></td>
                            <td><?= h($alumno->ampa) ?></td>
                            <td><?= h($alumno->eliminado) ?></td>
                            <td><?= h($alumno->comedor) ?></td>
                            <td><?= h($alumno->datos) ?></td>
                            <td><?= h($alumno->info_mail) ?></td>
                            <td><?= h($alumno->comodin) ?></td>
                            <td><?= h($alumno->curso) ?></td>
                            <td><?= h($alumno->matricula) ?></td>
                            <td><?= h($alumno->no_socio) ?></td>
                            <td><?= h($alumno->suplemento) ?></td>
                            <td><?= h($alumno->dto_fijo) ?></td>
                            <td><?= h($alumno->dto_porcentaje) ?></td>
                            <td><?= h($alumno->suma_pfijo) ?></td>
                            <td><?= h($alumno->suma_pvble) ?></td>
                            <td><?= h($alumno->cuota_previa) ?></td>
                            <td><?= h($alumno->cuota) ?></td>
                            <td><?= h($alumno->nif_alumno) ?></td>
                            <td><?= h($alumno->merito1) ?></td>
                            <td><?= h($alumno->merito2) ?></td>
                            <td><?= h($alumno->merito3) ?></td>
                            <td><?= h($alumno->merito4) ?></td>
                            <td><?= h($alumno->merito5) ?></td>
                            <td><?= h($alumno->ingles_3a) ?></td>
                            <td><?= h($alumno->ingles_4a) ?></td>
                            <td><?= h($alumno->ingles_5a) ?></td>
                            <td><?= h($alumno->ingles_g1) ?></td>
                            <td><?= h($alumno->ingles_g2) ?></td>
                            <td><?= h($alumno->ingles_g3) ?></td>
                            <td><?= h($alumno->ingles_g4) ?></td>
                            <td><?= h($alumno->ingles_g5) ?></td>
                            <td><?= h($alumno->ingles_g6) ?></td>
                            <td><?= h($alumno->ingles_g7) ?></td>
                            <td><?= h($alumno->ingles_g8) ?></td>
                            <td><?= h($alumno->ingles_g9) ?></td>
                            <td><?= h($alumno->impago) ?></td>
                            <td><?= h($alumno->texto_impago) ?></td>
                            <td><?= h($alumno->sip) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Alumnos', 'action' => 'view', $alumno->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Alumnos', 'action' => 'edit', $alumno->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Alumnos', 'action' => 'delete', $alumno->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $alumno->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Dias') ?></h4>
                <?php if (!empty($activitatsgrup->dias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitatsgrup->dias as $dia) : ?>
                        <tr>
                            <td><?= h($dia->id) ?></td>
                            <td><?= h($dia->nombre) ?></td>
                            <td><?= h($dia->descripc) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dias', 'action' => 'view', $dia->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dias', 'action' => 'edit', $dia->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Dias', 'action' => 'delete', $dia->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $dia->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Jornadasgrups') ?></h4>
                <?php if (!empty($activitatsgrup->jornadasgrups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Anyo') ?></th>
                            <th><?= __('Variac Ini') ?></th>
                            <th><?= __('Variac Fin') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitatsgrup->jornadasgrups as $jornadasgrup) : ?>
                        <tr>
                            <td><?= h($jornadasgrup->id) ?></td>
                            <td><?= h($jornadasgrup->codigo) ?></td>
                            <td><?= h($jornadasgrup->anyo) ?></td>
                            <td><?= h($jornadasgrup->variac_ini) ?></td>
                            <td><?= h($jornadasgrup->variac_fin) ?></td>
                            <td><?= h($jornadasgrup->created) ?></td>
                            <td><?= h($jornadasgrup->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Jornadasgrups', 'action' => 'view', $jornadasgrup->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Jornadasgrups', 'action' => 'edit', $jornadasgrup->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Jornadasgrups', 'action' => 'delete', $jornadasgrup->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $jornadasgrup->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Monitors') ?></h4>
                <?php if (!empty($activitatsgrup->monitors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Apellidos') ?></th>
                            <th><?= __('Poblacion') ?></th>
                            <th><?= __('Tfno1') ?></th>
                            <th><?= __('Tfno2') ?></th>
                            <th><?= __('Nif') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Bolsa') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitatsgrup->monitors as $monitor) : ?>
                        <tr>
                            <td><?= h($monitor->id) ?></td>
                            <td><?= h($monitor->codigo) ?></td>
                            <td><?= h($monitor->username) ?></td>
                            <td><?= h($monitor->email) ?></td>
                            <td><?= h($monitor->nombre) ?></td>
                            <td><?= h($monitor->apellidos) ?></td>
                            <td><?= h($monitor->poblacion) ?></td>
                            <td><?= h($monitor->tfno1) ?></td>
                            <td><?= h($monitor->tfno2) ?></td>
                            <td><?= h($monitor->nif) ?></td>
                            <td><?= h($monitor->validado) ?></td>
                            <td><?= h($monitor->bolsa) ?></td>
                            <td><?= h($monitor->created) ?></td>
                            <td><?= h($monitor->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Monitors', 'action' => 'view', $monitor->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Monitors', 'action' => 'edit', $monitor->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Monitors', 'action' => 'delete', $monitor->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $monitor->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Asistencias') ?></h4>
                <?php if (!empty($activitatsgrup->asistencias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitatsgrup->asistencias as $asistencia) : ?>
                        <tr>
                            <td><?= h($asistencia->id) ?></td>
                            <td><?= h($asistencia->alumno_id) ?></td>
                            <td><?= h($asistencia->created) ?></td>
                            <td><?= h($asistencia->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Asistencias', 'action' => 'view', $asistencia->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Asistencias', 'action' => 'edit', $asistencia->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Asistencias', 'action' => 'delete', $asistencia->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $asistencia->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Disponibilitats') ?></h4>
                <?php if (!empty($activitatsgrup->disponibilitats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Monitor Id') ?></th>
                            <th><?= __('Dia Id') ?></th>
                            <th><?= __('Hora Id') ?></th>
                            <th><?= __('Tiponodisponibilitat Id') ?></th>
                            <th><?= __('Disponible') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitatsgrup->disponibilitats as $disponibilitat) : ?>
                        <tr>
                            <td><?= h($disponibilitat->id) ?></td>
                            <td><?= h($disponibilitat->monitor_id) ?></td>
                            <td><?= h($disponibilitat->dia_id) ?></td>
                            <td><?= h($disponibilitat->hora_id) ?></td>
                            <td><?= h($disponibilitat->tiponodisponibilitat_id) ?></td>
                            <td><?= h($disponibilitat->disponible) ?></td>
                            <td><?= h($disponibilitat->created) ?></td>
                            <td><?= h($disponibilitat->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Disponibilitats', 'action' => 'view', $disponibilitat->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Disponibilitats', 'action' => 'edit', $disponibilitat->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Disponibilitats', 'action' => 'delete', $disponibilitat->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $disponibilitat->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Registrobajas') ?></h4>
                <?php if (!empty($activitatsgrup->registrobajas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Fecha Baja') ?></th>
                            <th><?= __('Motivo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Ejecutada') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitatsgrup->registrobajas as $registrobaja) : ?>
                        <tr>
                            <td><?= h($registrobaja->id) ?></td>
                            <td><?= h($registrobaja->alumno_id) ?></td>
                            <td><?= h($registrobaja->colegio_id) ?></td>
                            <td><?= h($registrobaja->fecha_baja) ?></td>
                            <td><?= h($registrobaja->motivo) ?></td>
                            <td><?= h($registrobaja->created) ?></td>
                            <td><?= h($registrobaja->modified) ?></td>
                            <td><?= h($registrobaja->observ) ?></td>
                            <td><?= h($registrobaja->ejecutada) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Registrobajas', 'action' => 'view', $registrobaja->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Registrobajas', 'action' => 'edit', $registrobaja->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Registrobajas', 'action' => 'delete', $registrobaja->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $registrobaja->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>