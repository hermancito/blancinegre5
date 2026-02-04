<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colegio $colegio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Colegio'), ['action' => 'edit', $colegio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Colegio'), ['action' => 'delete', $colegio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colegio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colegios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Colegio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegios view content">
            <h3><?= h($colegio->codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($colegio->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($colegio->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($colegio->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp') ?></th>
                    <td><?= h($colegio->cp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poblacion') ?></th>
                    <td><?= h($colegio->poblacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Eq Directivo') ?></th>
                    <td><?= h($colegio->eq_directivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Eqdirectivo') ?></th>
                    <td><?= h($colegio->email_eqdirectivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pdte Ampa') ?></th>
                    <td><?= h($colegio->pdte_ampa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Pdte') ?></th>
                    <td><?= h($colegio->email_pdte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Resp Act') ?></th>
                    <td><?= h($colegio->resp_act) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Resp') ?></th>
                    <td><?= h($colegio->email_resp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Conserge') ?></th>
                    <td><?= h($colegio->conserge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Conserge') ?></th>
                    <td><?= h($colegio->email_conserge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Centro') ?></th>
                    <td><?= h($colegio->email_centro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cif Centro') ?></th>
                    <td><?= h($colegio->cif_centro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Ampa') ?></th>
                    <td><?= h($colegio->email_ampa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cif Ampa') ?></th>
                    <td><?= h($colegio->cif_ampa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cesion Llaves') ?></th>
                    <td><?= h($colegio->cesion_llaves) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alarma') ?></th>
                    <td><?= h($colegio->alarma) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iban Centro') ?></th>
                    <td><?= h($colegio->iban_centro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iban Ampa') ?></th>
                    <td><?= h($colegio->iban_ampa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tablaspreciosvble') ?></th>
                    <td><?= $colegio->hasValue('tablaspreciosvble') ? $this->Html->link($colegio->tablaspreciosvble->nombre_tabla, ['controller' => 'Tablaspreciosvbles', 'action' => 'view', $colegio->tablaspreciosvble->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($colegio->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno Eqdirect') ?></th>
                    <td><?= $colegio->tfno_eqdirect === null ? '' : $this->Number->format($colegio->tfno_eqdirect) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno Pdte') ?></th>
                    <td><?= $colegio->tfno_pdte === null ? '' : $this->Number->format($colegio->tfno_pdte) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno Resp') ?></th>
                    <td><?= $colegio->tfno_resp === null ? '' : $this->Number->format($colegio->tfno_resp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno Conserge') ?></th>
                    <td><?= $colegio->tfno_conserge === null ? '' : $this->Number->format($colegio->tfno_conserge) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unidades Llaves') ?></th>
                    <td><?= $colegio->unidades_llaves === null ? '' : $this->Number->format($colegio->unidades_llaves) ?></td>
                </tr>
                <tr>
                    <th><?= __('Suplemento Nosocios') ?></th>
                    <td><?= $this->Number->format($colegio->suplemento_nosocios) ?></td>
                </tr>
                <tr>
                    <th><?= __('Porcentaje Nosocios') ?></th>
                    <td><?= $this->Number->format($colegio->porcentaje_nosocios) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($colegio->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($colegio->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mostrar Cuota') ?></th>
                    <td><?= $colegio->mostrar_cuota ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Dcto Hermanos') ?></th>
                    <td><?= $colegio->dcto_hermanos ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($colegio->observ)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Activitats') ?></h4>
                <?php if (!empty($colegio->activitats)) : ?>
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
                        <?php foreach ($colegio->activitats as $activitat) : ?>
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
                <h4><?= __('Related Coordinadors') ?></h4>
                <?php if (!empty($colegio->coordinadors)) : ?>
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
                        <?php foreach ($colegio->coordinadors as $coordinador) : ?>
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
                <h4><?= __('Related Monitors') ?></h4>
                <?php if (!empty($colegio->monitors)) : ?>
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
                        <?php foreach ($colegio->monitors as $monitor) : ?>
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
                <h4><?= __('Related Notifcolegios') ?></h4>
                <?php if (!empty($colegio->notifcolegios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Photo Dir') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Comodin') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->notifcolegios as $notifcolegio) : ?>
                        <tr>
                            <td><?= h($notifcolegio->id) ?></td>
                            <td><?= h($notifcolegio->user_id) ?></td>
                            <td><?= h($notifcolegio->nombre) ?></td>
                            <td><?= h($notifcolegio->descripc) ?></td>
                            <td><?= h($notifcolegio->photo) ?></td>
                            <td><?= h($notifcolegio->photo_dir) ?></td>
                            <td><?= h($notifcolegio->validado) ?></td>
                            <td><?= h($notifcolegio->comodin) ?></td>
                            <td><?= h($notifcolegio->created) ?></td>
                            <td><?= h($notifcolegio->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notifcolegios', 'action' => 'view', $notifcolegio->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notifcolegios', 'action' => 'edit', $notifcolegio->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Notifcolegios', 'action' => 'delete', $notifcolegio->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $notifcolegio->id),
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
                <?php if (!empty($colegio->activitatsgrups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Activitat Id') ?></th>
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
                        <?php foreach ($colegio->activitatsgrups as $activitatsgrup) : ?>
                        <tr>
                            <td><?= h($activitatsgrup->id) ?></td>
                            <td><?= h($activitatsgrup->codigo) ?></td>
                            <td><?= h($activitatsgrup->activitat_id) ?></td>
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
                <h4><?= __('Related Alumnos Xml') ?></h4>
                <?php if (!empty($colegio->alumnos_xml)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Xmlfile') ?></th>
                            <th><?= __('Xmlfile Dir') ?></th>
                            <th><?= __('Grabado') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->alumnos_xml as $alumnosXml) : ?>
                        <tr>
                            <td><?= h($alumnosXml->id) ?></td>
                            <td><?= h($alumnosXml->xmlfile) ?></td>
                            <td><?= h($alumnosXml->xmlfile_dir) ?></td>
                            <td><?= h($alumnosXml->grabado) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AlumnosXml', 'action' => 'view', $alumnosXml->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AlumnosXml', 'action' => 'edit', $alumnosXml->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'AlumnosXml', 'action' => 'delete', $alumnosXml->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $alumnosXml->id),
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
                <h4><?= __('Related Colegiofiles') ?></h4>
                <?php if (!empty($colegio->colegiofiles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('File Dir') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->colegiofiles as $colegiofile) : ?>
                        <tr>
                            <td><?= h($colegiofile->id) ?></td>
                            <td><?= h($colegiofile->user_id) ?></td>
                            <td><?= h($colegiofile->file) ?></td>
                            <td><?= h($colegiofile->file_dir) ?></td>
                            <td><?= h($colegiofile->created) ?></td>
                            <td><?= h($colegiofile->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Colegiofiles', 'action' => 'view', $colegiofile->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Colegiofiles', 'action' => 'edit', $colegiofile->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Colegiofiles', 'action' => 'delete', $colegiofile->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $colegiofile->id),
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
                <h4><?= __('Related Colegiofilesfamilias') ?></h4>
                <?php if (!empty($colegio->colegiofilesfamilias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('File Dir') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->colegiofilesfamilias as $colegiofilesfamilia) : ?>
                        <tr>
                            <td><?= h($colegiofilesfamilia->id) ?></td>
                            <td><?= h($colegiofilesfamilia->user_id) ?></td>
                            <td><?= h($colegiofilesfamilia->file) ?></td>
                            <td><?= h($colegiofilesfamilia->file_dir) ?></td>
                            <td><?= h($colegiofilesfamilia->created) ?></td>
                            <td><?= h($colegiofilesfamilia->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Colegiofilesfamilias', 'action' => 'view', $colegiofilesfamilia->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Colegiofilesfamilias', 'action' => 'edit', $colegiofilesfamilia->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Colegiofilesfamilias', 'action' => 'delete', $colegiofilesfamilia->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $colegiofilesfamilia->id),
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
                <h4><?= __('Related Coordinadordiaris') ?></h4>
                <?php if (!empty($colegio->coordinadordiaris)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Coordinador Id') ?></th>
                            <th><?= __('Dia') ?></th>
                            <th><?= __('Hora Ini') ?></th>
                            <th><?= __('Hora Fin') ?></th>
                            <th><?= __('Intervencion Id') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Resuelta') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->coordinadordiaris as $coordinadordiari) : ?>
                        <tr>
                            <td><?= h($coordinadordiari->id) ?></td>
                            <td><?= h($coordinadordiari->coordinador_id) ?></td>
                            <td><?= h($coordinadordiari->dia) ?></td>
                            <td><?= h($coordinadordiari->hora_ini) ?></td>
                            <td><?= h($coordinadordiari->hora_fin) ?></td>
                            <td><?= h($coordinadordiari->intervencion_id) ?></td>
                            <td><?= h($coordinadordiari->observ) ?></td>
                            <td><?= h($coordinadordiari->created) ?></td>
                            <td><?= h($coordinadordiari->modified) ?></td>
                            <td><?= h($coordinadordiari->resuelta) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Coordinadordiaris', 'action' => 'view', $coordinadordiari->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Coordinadordiaris', 'action' => 'edit', $coordinadordiari->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Coordinadordiaris', 'action' => 'delete', $coordinadordiari->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $coordinadordiari->id),
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
                <?php if (!empty($colegio->devoluciones)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Concepto') ?></th>
                            <th><?= __('Actividad') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Fecha Dev') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->devoluciones as $devolucione) : ?>
                        <tr>
                            <td><?= h($devolucione->id) ?></td>
                            <td><?= h($devolucione->alumno_id) ?></td>
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
                <h4><?= __('Related Notificacions') ?></h4>
                <?php if (!empty($colegio->notificacions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Activitat Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Photo Dir') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->notificacions as $notificacion) : ?>
                        <tr>
                            <td><?= h($notificacion->id) ?></td>
                            <td><?= h($notificacion->user_id) ?></td>
                            <td><?= h($notificacion->activitat_id) ?></td>
                            <td><?= h($notificacion->nombre) ?></td>
                            <td><?= h($notificacion->descripc) ?></td>
                            <td><?= h($notificacion->photo) ?></td>
                            <td><?= h($notificacion->photo_dir) ?></td>
                            <td><?= h($notificacion->validado) ?></td>
                            <td><?= h($notificacion->created) ?></td>
                            <td><?= h($notificacion->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notificacions', 'action' => 'view', $notificacion->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notificacions', 'action' => 'edit', $notificacion->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Notificacions', 'action' => 'delete', $notificacion->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $notificacion->id),
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
                <h4><?= __('Related Personalcontrols') ?></h4>
                <?php if (!empty($colegio->personalcontrols)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Tipoincidencia Id') ?></th>
                            <th><?= __('Actor Id') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comodin1') ?></th>
                            <th><?= __('Comodin2') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->personalcontrols as $personalcontrol) : ?>
                        <tr>
                            <td><?= h($personalcontrol->id) ?></td>
                            <td><?= h($personalcontrol->user_id) ?></td>
                            <td><?= h($personalcontrol->tipoincidencia_id) ?></td>
                            <td><?= h($personalcontrol->actor_id) ?></td>
                            <td><?= h($personalcontrol->descripc) ?></td>
                            <td><?= h($personalcontrol->created) ?></td>
                            <td><?= h($personalcontrol->modified) ?></td>
                            <td><?= h($personalcontrol->comodin1) ?></td>
                            <td><?= h($personalcontrol->comodin2) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Personalcontrols', 'action' => 'view', $personalcontrol->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Personalcontrols', 'action' => 'edit', $personalcontrol->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Personalcontrols', 'action' => 'delete', $personalcontrol->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $personalcontrol->id),
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
                <?php if (!empty($colegio->registroaltas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
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
                        <?php foreach ($colegio->registroaltas as $registroalta) : ?>
                        <tr>
                            <td><?= h($registroalta->id) ?></td>
                            <td><?= h($registroalta->alumno_id) ?></td>
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
                <?php if (!empty($colegio->registrobajas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
                            <th><?= __('Activitatsgrup Id') ?></th>
                            <th><?= __('Fecha Baja') ?></th>
                            <th><?= __('Motivo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Ejecutada') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->registrobajas as $registrobaja) : ?>
                        <tr>
                            <td><?= h($registrobaja->id) ?></td>
                            <td><?= h($registrobaja->alumno_id) ?></td>
                            <td><?= h($registrobaja->activitatsgrup_id) ?></td>
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
            <div class="related">
                <h4><?= __('Related Sustitucions') ?></h4>
                <?php if (!empty($colegio->sustitucions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Hora Ini') ?></th>
                            <th><?= __('Hora Fin') ?></th>
                            <th><?= __('Monitor Id') ?></th>
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
                        <?php foreach ($colegio->sustitucions as $sustitucion) : ?>
                        <tr>
                            <td><?= h($sustitucion->id) ?></td>
                            <td><?= h($sustitucion->fecha) ?></td>
                            <td><?= h($sustitucion->hora_ini) ?></td>
                            <td><?= h($sustitucion->hora_fin) ?></td>
                            <td><?= h($sustitucion->monitor_id) ?></td>
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
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($colegio->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Photo Dir') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Apellidos') ?></th>
                            <th><?= __('Tfno1') ?></th>
                            <th><?= __('Tfno2') ?></th>
                            <th><?= __('Nif') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Bolsa') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Datos') ?></th>
                            <th><?= __('Info Mail') ?></th>
                            <th><?= __('Sexo') ?></th>
                            <th><?= __('Seg Soc') ?></th>
                            <th><?= __('Iban') ?></th>
                            <th><?= __('Cuenta') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Poblacion') ?></th>
                            <th><?= __('Cod Postal') ?></th>
                            <th><?= __('Contrato') ?></th>
                            <th><?= __('Fecha Ant') ?></th>
                            <th><?= __('Carnet Cond') ?></th>
                            <th><?= __('Vehiculo') ?></th>
                            <th><?= __('Titulaciones') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Certif Antec') ?></th>
                            <th><?= __('Mutua') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Fecha Nac') ?></th>
                            <th><?= __('Token Dispositivo') ?></th>
                            <th><?= __('Niv Ingles') ?></th>
                            <th><?= __('Niv Valencia') ?></th>
                            <th><?= __('Disponib') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colegio->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->codigo) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->photo) ?></td>
                            <td><?= h($user->photo_dir) ?></td>
                            <td><?= h($user->nombre) ?></td>
                            <td><?= h($user->apellidos) ?></td>
                            <td><?= h($user->tfno1) ?></td>
                            <td><?= h($user->tfno2) ?></td>
                            <td><?= h($user->nif) ?></td>
                            <td><?= h($user->validado) ?></td>
                            <td><?= h($user->bolsa) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td><?= h($user->datos) ?></td>
                            <td><?= h($user->info_mail) ?></td>
                            <td><?= h($user->sexo) ?></td>
                            <td><?= h($user->seg_soc) ?></td>
                            <td><?= h($user->iban) ?></td>
                            <td><?= h($user->cuenta) ?></td>
                            <td><?= h($user->direccion) ?></td>
                            <td><?= h($user->poblacion) ?></td>
                            <td><?= h($user->cod_postal) ?></td>
                            <td><?= h($user->contrato) ?></td>
                            <td><?= h($user->fecha_ant) ?></td>
                            <td><?= h($user->carnet_cond) ?></td>
                            <td><?= h($user->vehiculo) ?></td>
                            <td><?= h($user->titulaciones) ?></td>
                            <td><?= h($user->observ) ?></td>
                            <td><?= h($user->certif_antec) ?></td>
                            <td><?= h($user->mutua) ?></td>
                            <td><?= h($user->token) ?></td>
                            <td><?= h($user->fecha_nac) ?></td>
                            <td><?= h($user->token_dispositivo) ?></td>
                            <td><?= h($user->niv_ingles) ?></td>
                            <td><?= h($user->niv_valencia) ?></td>
                            <td><?= h($user->disponib) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Users', 'action' => 'delete', $user->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
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