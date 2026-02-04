<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinador $coordinador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Coordinador'), ['action' => 'edit', $coordinador->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Coordinador'), ['action' => 'delete', $coordinador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinador->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coordinadors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Coordinador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="coordinadors view content">
            <h3><?= h($coordinador->username) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($coordinador->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($coordinador->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($coordinador->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($coordinador->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($coordinador->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nif') ?></th>
                    <td><?= h($coordinador->nif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($coordinador->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno1') ?></th>
                    <td><?= $coordinador->tfno1 === null ? '' : $this->Number->format($coordinador->tfno1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno2') ?></th>
                    <td><?= $coordinador->tfno2 === null ? '' : $this->Number->format($coordinador->tfno2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coordinador->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coordinador->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validado') ?></th>
                    <td><?= $coordinador->validado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Alumnos') ?></h4>
                <?php if (!empty($coordinador->alumnos)) : ?>
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
                        <?php foreach ($coordinador->alumnos as $alumno) : ?>
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
                <h4><?= __('Related Colegios') ?></h4>
                <?php if (!empty($coordinador->colegios)) : ?>
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
                        <?php foreach ($coordinador->colegios as $colegio) : ?>
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
                <h4><?= __('Related Monitors') ?></h4>
                <?php if (!empty($coordinador->monitors)) : ?>
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
                        <?php foreach ($coordinador->monitors as $monitor) : ?>
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
                <h4><?= __('Related Coordinadordiaris') ?></h4>
                <?php if (!empty($coordinador->coordinadordiaris)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
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
                        <?php foreach ($coordinador->coordinadordiaris as $coordinadordiari) : ?>
                        <tr>
                            <td><?= h($coordinadordiari->id) ?></td>
                            <td><?= h($coordinadordiari->colegio_id) ?></td>
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
                <h4><?= __('Related Coordinadorsfiles') ?></h4>
                <?php if (!empty($coordinador->coordinadorsfiles)) : ?>
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
                        <?php foreach ($coordinador->coordinadorsfiles as $coordinadorsfile) : ?>
                        <tr>
                            <td><?= h($coordinadorsfile->id) ?></td>
                            <td><?= h($coordinadorsfile->user_id) ?></td>
                            <td><?= h($coordinadorsfile->file) ?></td>
                            <td><?= h($coordinadorsfile->file_dir) ?></td>
                            <td><?= h($coordinadorsfile->created) ?></td>
                            <td><?= h($coordinadorsfile->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Coordinadorsfiles', 'action' => 'view', $coordinadorsfile->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Coordinadorsfiles', 'action' => 'edit', $coordinadorsfile->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Coordinadorsfiles', 'action' => 'delete', $coordinadorsfile->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $coordinadorsfile->id),
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