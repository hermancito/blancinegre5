<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumno $alumno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumno'), ['action' => 'edit', $alumno->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumno'), ['action' => 'delete', $alumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="alumnos view content">
            <h3><?= h($alumno->codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $alumno->hasValue('user') ? $this->Html->link($alumno->user->email, ['controller' => 'Users', 'action' => 'view', $alumno->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User2') ?></th>
                    <td><?= $alumno->hasValue('user2') ? $this->Html->link($alumno->user2->email, ['controller' => 'Users', 'action' => 'view', $alumno->user2->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Coleg') ?></th>
                    <td><?= $alumno->hasValue('coleg') ? $this->Html->link($alumno->coleg->codigo, ['controller' => 'Colegios', 'action' => 'view', $alumno->coleg->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($alumno->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre Apellidos') ?></th>
                    <td><?= h($alumno->nombre_apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($alumno->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cuenta') ?></th>
                    <td><?= h($alumno->cuenta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iban') ?></th>
                    <td><?= h($alumno->iban) ?></td>
                </tr>
                <tr>
                    <th><?= __('Titular') ?></th>
                    <td><?= h($alumno->titular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nif') ?></th>
                    <td><?= h($alumno->nif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cobro') ?></th>
                    <td><?= h($alumno->cobro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Material') ?></th>
                    <td><?= h($alumno->material) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin') ?></th>
                    <td><?= h($alumno->comodin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso') ?></th>
                    <td><?= h($alumno->curso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nif Alumno') ?></th>
                    <td><?= h($alumno->nif_alumno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Merito1') ?></th>
                    <td><?= h($alumno->merito1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Merito2') ?></th>
                    <td><?= h($alumno->merito2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Merito3') ?></th>
                    <td><?= h($alumno->merito3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Merito4') ?></th>
                    <td><?= h($alumno->merito4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Merito5') ?></th>
                    <td><?= h($alumno->merito5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles 3a') ?></th>
                    <td><?= h($alumno->ingles_3a) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles 4a') ?></th>
                    <td><?= h($alumno->ingles_4a) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles 5a') ?></th>
                    <td><?= h($alumno->ingles_5a) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G1') ?></th>
                    <td><?= h($alumno->ingles_g1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G2') ?></th>
                    <td><?= h($alumno->ingles_g2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G3') ?></th>
                    <td><?= h($alumno->ingles_g3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G4') ?></th>
                    <td><?= h($alumno->ingles_g4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G5') ?></th>
                    <td><?= h($alumno->ingles_g5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G6') ?></th>
                    <td><?= h($alumno->ingles_g6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G7') ?></th>
                    <td><?= h($alumno->ingles_g7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G8') ?></th>
                    <td><?= h($alumno->ingles_g8) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingles G9') ?></th>
                    <td><?= h($alumno->ingles_g9) ?></td>
                </tr>
                <tr>
                    <th><?= __('Texto Impago') ?></th>
                    <td><?= h($alumno->texto_impago) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sip') ?></th>
                    <td><?= h($alumno->sip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($alumno->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anyo') ?></th>
                    <td><?= $alumno->anyo === null ? '' : $this->Number->format($alumno->anyo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno') ?></th>
                    <td><?= $alumno->tfno === null ? '' : $this->Number->format($alumno->tfno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Movil') ?></th>
                    <td><?= $alumno->movil === null ? '' : $this->Number->format($alumno->movil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Recibo') ?></th>
                    <td><?= $alumno->recibo === null ? '' : $this->Number->format($alumno->recibo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ampa') ?></th>
                    <td><?= $alumno->ampa === null ? '' : $this->Number->format($alumno->ampa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matricula') ?></th>
                    <td><?= $this->Number->format($alumno->matricula) ?></td>
                </tr>
                <tr>
                    <th><?= __('No Socio') ?></th>
                    <td><?= $this->Number->format($alumno->no_socio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suplemento') ?></th>
                    <td><?= $this->Number->format($alumno->suplemento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dto Fijo') ?></th>
                    <td><?= $this->Number->format($alumno->dto_fijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dto Porcentaje') ?></th>
                    <td><?= $this->Number->format($alumno->dto_porcentaje) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suma Pfijo') ?></th>
                    <td><?= $this->Number->format($alumno->suma_pfijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suma Pvble') ?></th>
                    <td><?= $this->Number->format($alumno->suma_pvble) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cuota Previa') ?></th>
                    <td><?= $this->Number->format($alumno->cuota_previa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cuota') ?></th>
                    <td><?= $this->Number->format($alumno->cuota) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($alumno->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($alumno->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $alumno->activo ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Socio') ?></th>
                    <td><?= $alumno->socio ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Eliminado') ?></th>
                    <td><?= $alumno->eliminado ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Comedor') ?></th>
                    <td><?= $alumno->comedor ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Datos') ?></th>
                    <td><?= $alumno->datos ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Info Mail') ?></th>
                    <td><?= $alumno->info_mail ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Impago') ?></th>
                    <td><?= $alumno->impago ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Coment Pub') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($alumno->coment_pub)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Coment Priv') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($alumno->coment_priv)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Activitats') ?></h4>
                <?php if (!empty($alumno->activitats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->activitats as $activitat) : ?>
                        <tr>
                            <td><?= h($activitat->id) ?></td>
                            <td><?= h($activitat->nombre) ?></td>
                            <td><?= h($activitat->codigo) ?></td>
                            <td><?= h($activitat->created) ?></td>
                            <td><?= h($activitat->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Activitats', 'action' => 'view', $activitat->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Activitats', 'action' => 'edit', $activitat->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Activitats', 'action' => 'delete', $activitat->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $activitat->id),
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
                <h4><?= __('Related Activitatsgrups') ?></h4>
                <?php if (!empty($alumno->activitatsgrups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Activitat Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Aula') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comentarios') ?></th>
                            <th><?= __('Tipo Fijo') ?></th>
                            <th><?= __('Tipo Vble') ?></th>
                            <th><?= __('Sala Fijo') ?></th>
                            <th><?= __('Sala Vble') ?></th>
                            <th><?= __('Visible Familias') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Aplicar Jornada') ?></th>
                            <th><?= __('Alum Min') ?></th>
                            <th><?= __('Alum Max') ?></th>
                            <th><?= __('Fecha Inicio') ?></th>
                            <th><?= __('Fecha Fin') ?></th>
                            <th><?= __('Matricula') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->activitatsgrups as $activitatsgrup) : ?>
                        <tr>
                            <td><?= h($activitatsgrup->id) ?></td>
                            <td><?= h($activitatsgrup->codigo) ?></td>
                            <td><?= h($activitatsgrup->activitat_id) ?></td>
                            <td><?= h($activitatsgrup->colegio_id) ?></td>
                            <td><?= h($activitatsgrup->aula) ?></td>
                            <td><?= h($activitatsgrup->created) ?></td>
                            <td><?= h($activitatsgrup->modified) ?></td>
                            <td><?= h($activitatsgrup->comentarios) ?></td>
                            <td><?= h($activitatsgrup->tipo_fijo) ?></td>
                            <td><?= h($activitatsgrup->tipo_vble) ?></td>
                            <td><?= h($activitatsgrup->sala_fijo) ?></td>
                            <td><?= h($activitatsgrup->sala_vble) ?></td>
                            <td><?= h($activitatsgrup->visible_familias) ?></td>
                            <td><?= h($activitatsgrup->descripc) ?></td>
                            <td><?= h($activitatsgrup->aplicar_jornada) ?></td>
                            <td><?= h($activitatsgrup->alum_min) ?></td>
                            <td><?= h($activitatsgrup->alum_max) ?></td>
                            <td><?= h($activitatsgrup->fecha_inicio) ?></td>
                            <td><?= h($activitatsgrup->fecha_fin) ?></td>
                            <td><?= h($activitatsgrup->matricula) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrup->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Activitatsgrups', 'action' => 'edit', $activitatsgrup->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Activitatsgrups', 'action' => 'delete', $activitatsgrup->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrup->id),
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
                <h4><?= __('Related Coordinadors') ?></h4>
                <?php if (!empty($alumno->coordinadors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Apellidos') ?></th>
                            <th><?= __('Tfno1') ?></th>
                            <th><?= __('Tfno2') ?></th>
                            <th><?= __('Nif') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->coordinadors as $coordinador) : ?>
                        <tr>
                            <td><?= h($coordinador->id) ?></td>
                            <td><?= h($coordinador->codigo) ?></td>
                            <td><?= h($coordinador->username) ?></td>
                            <td><?= h($coordinador->email) ?></td>
                            <td><?= h($coordinador->nombre) ?></td>
                            <td><?= h($coordinador->apellidos) ?></td>
                            <td><?= h($coordinador->tfno1) ?></td>
                            <td><?= h($coordinador->tfno2) ?></td>
                            <td><?= h($coordinador->nif) ?></td>
                            <td><?= h($coordinador->validado) ?></td>
                            <td><?= h($coordinador->created) ?></td>
                            <td><?= h($coordinador->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Coordinadors', 'action' => 'view', $coordinador->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Coordinadors', 'action' => 'edit', $coordinador->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Coordinadors', 'action' => 'delete', $coordinador->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $coordinador->id),
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
                <?php if (!empty($alumno->asistencias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Activitatsgrup Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->asistencias as $asistencia) : ?>
                        <tr>
                            <td><?= h($asistencia->id) ?></td>
                            <td><?= h($asistencia->activitatsgrup_id) ?></td>
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
                <h4><?= __('Related Boletines') ?></h4>
                <?php if (!empty($alumno->boletines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Nota Id') ?></th>
                            <th><?= __('Notas Alumno') ?></th>
                            <th><?= __('Contenidos') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->boletines as $boletine) : ?>
                        <tr>
                            <td><?= h($boletine->id) ?></td>
                            <td><?= h($boletine->user_id) ?></td>
                            <td><?= h($boletine->nota_id) ?></td>
                            <td><?= h($boletine->notas_alumno) ?></td>
                            <td><?= h($boletine->contenidos) ?></td>
                            <td><?= h($boletine->validado) ?></td>
                            <td><?= h($boletine->created) ?></td>
                            <td><?= h($boletine->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Boletines', 'action' => 'view', $boletine->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Boletines', 'action' => 'edit', $boletine->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Boletines', 'action' => 'delete', $boletine->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $boletine->id),
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
                <h4><?= __('Related Devoluciones') ?></h4>
                <?php if (!empty($alumno->devoluciones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Concepto') ?></th>
                            <th><?= __('Actividad') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Fecha Dev') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->devoluciones as $devolucione) : ?>
                        <tr>
                            <td><?= h($devolucione->id) ?></td>
                            <td><?= h($devolucione->colegio_id) ?></td>
                            <td><?= h($devolucione->importe) ?></td>
                            <td><?= h($devolucione->concepto) ?></td>
                            <td><?= h($devolucione->actividad) ?></td>
                            <td><?= h($devolucione->observ) ?></td>
                            <td><?= h($devolucione->fecha_dev) ?></td>
                            <td><?= h($devolucione->created) ?></td>
                            <td><?= h($devolucione->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Devoluciones', 'action' => 'view', $devolucione->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Devoluciones', 'action' => 'edit', $devolucione->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Devoluciones', 'action' => 'delete', $devolucione->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $devolucione->id),
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
                <h4><?= __('Related Notas') ?></h4>
                <?php if (!empty($alumno->notas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Comodin') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Activitat Id') ?></th>
                            <th><?= __('Cuatrim') ?></th>
                            <th><?= __('Anyo') ?></th>
                            <th><?= __('Curso') ?></th>
                            <th><?= __('Objetivos') ?></th>
                            <th><?= __('Contenidos') ?></th>
                            <th><?= __('Atencion') ?></th>
                            <th><?= __('Participa') ?></th>
                            <th><?= __('Ejerc') ?></th>
                            <th><?= __('Asist') ?></th>
                            <th><?= __('Actitud') ?></th>
                            <th><?= __('Respeto') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Comentarios Boletin') ?></th>
                            <th><?= __('Contenidos Boletin') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->notas as $nota) : ?>
                        <tr>
                            <td><?= h($nota->id) ?></td>
                            <td><?= h($nota->comodin) ?></td>
                            <td><?= h($nota->user_id) ?></td>
                            <td><?= h($nota->activitat_id) ?></td>
                            <td><?= h($nota->cuatrim) ?></td>
                            <td><?= h($nota->anyo) ?></td>
                            <td><?= h($nota->curso) ?></td>
                            <td><?= h($nota->objetivos) ?></td>
                            <td><?= h($nota->contenidos) ?></td>
                            <td><?= h($nota->atencion) ?></td>
                            <td><?= h($nota->participa) ?></td>
                            <td><?= h($nota->ejerc) ?></td>
                            <td><?= h($nota->asist) ?></td>
                            <td><?= h($nota->actitud) ?></td>
                            <td><?= h($nota->respeto) ?></td>
                            <td><?= h($nota->validado) ?></td>
                            <td><?= h($nota->comentarios_boletin) ?></td>
                            <td><?= h($nota->contenidos_boletin) ?></td>
                            <td><?= h($nota->created) ?></td>
                            <td><?= h($nota->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notas', 'action' => 'view', $nota->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notas', 'action' => 'edit', $nota->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Notas', 'action' => 'delete', $nota->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $nota->id),
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
                <h4><?= __('Related Registroaltas') ?></h4>
                <?php if (!empty($alumno->registroaltas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Concepto') ?></th>
                            <th><?= __('Alta Amplia') ?></th>
                            <th><?= __('Material') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Fecha Alta') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->registroaltas as $registroalta) : ?>
                        <tr>
                            <td><?= h($registroalta->id) ?></td>
                            <td><?= h($registroalta->colegio_id) ?></td>
                            <td><?= h($registroalta->importe) ?></td>
                            <td><?= h($registroalta->concepto) ?></td>
                            <td><?= h($registroalta->alta_amplia) ?></td>
                            <td><?= h($registroalta->material) ?></td>
                            <td><?= h($registroalta->observ) ?></td>
                            <td><?= h($registroalta->fecha_alta) ?></td>
                            <td><?= h($registroalta->created) ?></td>
                            <td><?= h($registroalta->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Registroaltas', 'action' => 'view', $registroalta->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Registroaltas', 'action' => 'edit', $registroalta->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Registroaltas', 'action' => 'delete', $registroalta->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $registroalta->id),
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
                <?php if (!empty($alumno->registrobajas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Activitatsgrup Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Fecha Baja') ?></th>
                            <th><?= __('Motivo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Ejecutada') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($alumno->registrobajas as $registrobaja) : ?>
                        <tr>
                            <td><?= h($registrobaja->id) ?></td>
                            <td><?= h($registrobaja->activitatsgrup_id) ?></td>
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