<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitor $monitor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Monitor'), ['action' => 'edit', $monitor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Monitor'), ['action' => 'delete', $monitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monitor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Monitor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="monitors view content">
            <h3><?= h($monitor->username) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($monitor->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($monitor->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($monitor->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($monitor->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($monitor->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poblacion') ?></th>
                    <td><?= h($monitor->poblacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nif') ?></th>
                    <td><?= h($monitor->nif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($monitor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno1') ?></th>
                    <td><?= $monitor->tfno1 === null ? '' : $this->Number->format($monitor->tfno1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno2') ?></th>
                    <td><?= $monitor->tfno2 === null ? '' : $this->Number->format($monitor->tfno2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($monitor->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($monitor->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validado') ?></th>
                    <td><?= $monitor->validado ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Bolsa') ?></th>
                    <td><?= $monitor->bolsa ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Activitats') ?></h4>
                <?php if (!empty($monitor->activitats)) : ?>
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
                        <?php foreach ($monitor->activitats as $activitat) : ?>
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
                <?php if (!empty($monitor->activitatsgrups)) : ?>
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
                        <?php foreach ($monitor->activitatsgrups as $activitatsgrup) : ?>
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
                <h4><?= __('Related Colegios') ?></h4>
                <?php if (!empty($monitor->colegios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Cp') ?></th>
                            <th><?= __('Poblacion') ?></th>
                            <th><?= __('Eq Directivo') ?></th>
                            <th><?= __('Tfno Eqdirect') ?></th>
                            <th><?= __('Email Eqdirectivo') ?></th>
                            <th><?= __('Pdte Ampa') ?></th>
                            <th><?= __('Tfno Pdte') ?></th>
                            <th><?= __('Email Pdte') ?></th>
                            <th><?= __('Resp Act') ?></th>
                            <th><?= __('Tfno Resp') ?></th>
                            <th><?= __('Email Resp') ?></th>
                            <th><?= __('Conserge') ?></th>
                            <th><?= __('Tfno Conserge') ?></th>
                            <th><?= __('Email Conserge') ?></th>
                            <th><?= __('Email Centro') ?></th>
                            <th><?= __('Cif Centro') ?></th>
                            <th><?= __('Email Ampa') ?></th>
                            <th><?= __('Cif Ampa') ?></th>
                            <th><?= __('Cesion Llaves') ?></th>
                            <th><?= __('Unidades Llaves') ?></th>
                            <th><?= __('Alarma') ?></th>
                            <th><?= __('Iban Centro') ?></th>
                            <th><?= __('Iban Ampa') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Tablaspreciosvble Id') ?></th>
                            <th><?= __('Suplemento Nosocios') ?></th>
                            <th><?= __('Porcentaje Nosocios') ?></th>
                            <th><?= __('Mostrar Cuota') ?></th>
                            <th><?= __('Dcto Hermanos') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($monitor->colegios as $colegio) : ?>
                        <tr>
                            <td><?= h($colegio->id) ?></td>
                            <td><?= h($colegio->codigo) ?></td>
                            <td><?= h($colegio->username) ?></td>
                            <td><?= h($colegio->direccion) ?></td>
                            <td><?= h($colegio->cp) ?></td>
                            <td><?= h($colegio->poblacion) ?></td>
                            <td><?= h($colegio->eq_directivo) ?></td>
                            <td><?= h($colegio->tfno_eqdirect) ?></td>
                            <td><?= h($colegio->email_eqdirectivo) ?></td>
                            <td><?= h($colegio->pdte_ampa) ?></td>
                            <td><?= h($colegio->tfno_pdte) ?></td>
                            <td><?= h($colegio->email_pdte) ?></td>
                            <td><?= h($colegio->resp_act) ?></td>
                            <td><?= h($colegio->tfno_resp) ?></td>
                            <td><?= h($colegio->email_resp) ?></td>
                            <td><?= h($colegio->conserge) ?></td>
                            <td><?= h($colegio->tfno_conserge) ?></td>
                            <td><?= h($colegio->email_conserge) ?></td>
                            <td><?= h($colegio->email_centro) ?></td>
                            <td><?= h($colegio->cif_centro) ?></td>
                            <td><?= h($colegio->email_ampa) ?></td>
                            <td><?= h($colegio->cif_ampa) ?></td>
                            <td><?= h($colegio->cesion_llaves) ?></td>
                            <td><?= h($colegio->unidades_llaves) ?></td>
                            <td><?= h($colegio->alarma) ?></td>
                            <td><?= h($colegio->iban_centro) ?></td>
                            <td><?= h($colegio->iban_ampa) ?></td>
                            <td><?= h($colegio->observ) ?></td>
                            <td><?= h($colegio->created) ?></td>
                            <td><?= h($colegio->modified) ?></td>
                            <td><?= h($colegio->tablaspreciosvble_id) ?></td>
                            <td><?= h($colegio->suplemento_nosocios) ?></td>
                            <td><?= h($colegio->porcentaje_nosocios) ?></td>
                            <td><?= h($colegio->mostrar_cuota) ?></td>
                            <td><?= h($colegio->dcto_hermanos) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Colegios', 'action' => 'view', $colegio->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Colegios', 'action' => 'edit', $colegio->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Colegios', 'action' => 'delete', $colegio->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $colegio->id),
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
                <?php if (!empty($monitor->coordinadors)) : ?>
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
                        <?php foreach ($monitor->coordinadors as $coordinador) : ?>
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
                <h4><?= __('Related Disponibilitats') ?></h4>
                <?php if (!empty($monitor->disponibilitats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Dia Id') ?></th>
                            <th><?= __('Hora Id') ?></th>
                            <th><?= __('Tiponodisponibilitat Id') ?></th>
                            <th><?= __('Activitatsgrup Id') ?></th>
                            <th><?= __('Disponible') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($monitor->disponibilitats as $disponibilitat) : ?>
                        <tr>
                            <td><?= h($disponibilitat->id) ?></td>
                            <td><?= h($disponibilitat->dia_id) ?></td>
                            <td><?= h($disponibilitat->hora_id) ?></td>
                            <td><?= h($disponibilitat->tiponodisponibilitat_id) ?></td>
                            <td><?= h($disponibilitat->activitatsgrup_id) ?></td>
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
                <h4><?= __('Related Monitorsfiles') ?></h4>
                <?php if (!empty($monitor->monitorsfiles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('File Dir') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Todos Monit') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($monitor->monitorsfiles as $monitorsfile) : ?>
                        <tr>
                            <td><?= h($monitorsfile->id) ?></td>
                            <td><?= h($monitorsfile->user_id) ?></td>
                            <td><?= h($monitorsfile->file) ?></td>
                            <td><?= h($monitorsfile->file_dir) ?></td>
                            <td><?= h($monitorsfile->created) ?></td>
                            <td><?= h($monitorsfile->modified) ?></td>
                            <td><?= h($monitorsfile->todos_monit) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Monitorsfiles', 'action' => 'view', $monitorsfile->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Monitorsfiles', 'action' => 'edit', $monitorsfile->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Monitorsfiles', 'action' => 'delete', $monitorsfile->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $monitorsfile->id),
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
                <h4><?= __('Related Sustitucions') ?></h4>
                <?php if (!empty($monitor->sustitucions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Hora Ini') ?></th>
                            <th><?= __('Hora Fin') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Activitat Id') ?></th>
                            <th><?= __('Coste') ?></th>
                            <th><?= __('Justificada') ?></th>
                            <th><?= __('Motivo') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Salario') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comodin1') ?></th>
                            <th><?= __('Comodin2') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($monitor->sustitucions as $sustitucion) : ?>
                        <tr>
                            <td><?= h($sustitucion->id) ?></td>
                            <td><?= h($sustitucion->fecha) ?></td>
                            <td><?= h($sustitucion->hora_ini) ?></td>
                            <td><?= h($sustitucion->hora_fin) ?></td>
                            <td><?= h($sustitucion->colegio_id) ?></td>
                            <td><?= h($sustitucion->activitat_id) ?></td>
                            <td><?= h($sustitucion->coste) ?></td>
                            <td><?= h($sustitucion->justificada) ?></td>
                            <td><?= h($sustitucion->motivo) ?></td>
                            <td><?= h($sustitucion->user_id) ?></td>
                            <td><?= h($sustitucion->salario) ?></td>
                            <td><?= h($sustitucion->created) ?></td>
                            <td><?= h($sustitucion->modified) ?></td>
                            <td><?= h($sustitucion->comodin1) ?></td>
                            <td><?= h($sustitucion->comodin2) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sustitucions', 'action' => 'view', $sustitucion->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sustitucions', 'action' => 'edit', $sustitucion->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Sustitucions', 'action' => 'delete', $sustitucion->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $sustitucion->id),
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
                <h4><?= __('Related Volantes') ?></h4>
                <?php if (!empty($monitor->volantes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($monitor->volantes as $volante) : ?>
                        <tr>
                            <td><?= h($volante->id) ?></td>
                            <td><?= h($volante->observ) ?></td>
                            <td><?= h($volante->created) ?></td>
                            <td><?= h($volante->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Volantes', 'action' => 'view', $volante->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Volantes', 'action' => 'edit', $volante->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Volantes', 'action' => 'delete', $volante->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $volante->id),
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