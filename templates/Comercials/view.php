<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comercial $comercial
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Comercial'), ['action' => 'edit', $comercial->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comercial'), ['action' => 'delete', $comercial->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comercial->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comercials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comercial'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="comercials view content">
            <h3><?= h($comercial->codigo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($comercial->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nom Centro') ?></th>
                    <td><?= h($comercial->nom_centro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Localidad') ?></th>
                    <td><?= h($comercial->localidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Agente') ?></th>
                    <td><?= $comercial->hasValue('agente') ? $this->Html->link($comercial->agente->nom_agente, ['controller' => 'Agentes', 'action' => 'view', $comercial->agente->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($comercial->estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jornada') ?></th>
                    <td><?= h($comercial->jornada) ?></td>
                </tr>
                <tr>
                    <th><?= __('Control Admon') ?></th>
                    <td><?= h($comercial->control_admon) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comarca') ?></th>
                    <td><?= h($comercial->comarca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Via') ?></th>
                    <td><?= h($comercial->tipo_via) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($comercial->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num') ?></th>
                    <td><?= h($comercial->num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp') ?></th>
                    <td><?= h($comercial->cp) ?></td>
                </tr>
                <tr>
                    <th><?= __('Provincia') ?></th>
                    <td><?= h($comercial->provincia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno') ?></th>
                    <td><?= h($comercial->tfno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fax') ?></th>
                    <td><?= h($comercial->fax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cif') ?></th>
                    <td><?= h($comercial->cif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gestion Actual') ?></th>
                    <td><?= h($comercial->gestion_actual) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Centro') ?></th>
                    <td><?= h($comercial->email_centro) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto1 Cargo') ?></th>
                    <td><?= h($comercial->contacto1_cargo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto1 Nom Tfno') ?></th>
                    <td><?= h($comercial->contacto1_nom_tfno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto1 Mail') ?></th>
                    <td><?= h($comercial->contacto1_mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto2 Cargo') ?></th>
                    <td><?= h($comercial->contacto2_cargo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto2 Nom Tfno') ?></th>
                    <td><?= h($comercial->contacto2_nom_tfno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto2 Mail') ?></th>
                    <td><?= h($comercial->contacto2_mail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contacto3 Datos') ?></th>
                    <td><?= h($comercial->contacto3_datos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ini Cto') ?></th>
                    <td><?= h($comercial->ini_cto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ini Cto Agente') ?></th>
                    <td><?= h($comercial->ini_cto_agente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fin Cto') ?></th>
                    <td><?= h($comercial->fin_cto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fin Cto Agente') ?></th>
                    <td><?= h($comercial->fin_cto_agente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresa') ?></th>
                    <td><?= $comercial->hasValue('empresa') ? $this->Html->link($comercial->empresa->nom_empresa, ['controller' => 'Empresas', 'action' => 'view', $comercial->empresa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresado') ?></th>
                    <td><?= $comercial->hasValue('empresado') ? $this->Html->link($comercial->empresado->nom_empresa, ['controller' => 'Empresasdos', 'action' => 'view', $comercial->empresado->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresatre') ?></th>
                    <td><?= $comercial->hasValue('empresatre') ? $this->Html->link($comercial->empresatre->nom_empresa, ['controller' => 'Empresastres', 'action' => 'view', $comercial->empresatre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($comercial->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pax') ?></th>
                    <td><?= $comercial->pax === null ? '' : $this->Number->format($comercial->pax) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($comercial->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($comercial->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Matinal') ?></th>
                    <td><?= $comercial->matinal ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Mediodia') ?></th>
                    <td><?= $comercial->mediodia ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('J Continua') ?></th>
                    <td><?= $comercial->j_continua ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Tardes') ?></th>
                    <td><?= $comercial->tardes ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Jun Sept') ?></th>
                    <td><?= $comercial->jun_sept ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Vacacionales') ?></th>
                    <td><?= $comercial->vacacionales ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Plant Comercial') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($comercial->plant_comercial)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Historial Citas Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($comercial->historial_citas_observ)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Comercialsarxius') ?></h4>
                <?php if (!empty($comercial->comercialsarxius)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Pdf') ?></th>
                            <th><?= __('Pdf Dir') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($comercial->comercialsarxius as $comercialsarxius) : ?>
                        <tr>
                            <td><?= h($comercialsarxius->id) ?></td>
                            <td><?= h($comercialsarxius->pdf) ?></td>
                            <td><?= h($comercialsarxius->pdf_dir) ?></td>
                            <td><?= h($comercialsarxius->created) ?></td>
                            <td><?= h($comercialsarxius->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Comercialsarxius', 'action' => 'view', $comercialsarxius->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Comercialsarxius', 'action' => 'edit', $comercialsarxius->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Comercialsarxius', 'action' => 'delete', $comercialsarxius->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $comercialsarxius->id),
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
                <h4><?= __('Related Ofertas') ?></h4>
                <?php if (!empty($comercial->ofertas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Tipo Entidad') ?></th>
                            <th><?= __('Duracion Contrato') ?></th>
                            <th><?= __('Fecha Firma') ?></th>
                            <th><?= __('Fecha Ini') ?></th>
                            <th><?= __('Proveedor Unico') ?></th>
                            <th><?= __('Ofertamos Medidodia') ?></th>
                            <th><?= __('Ofertamos Matinera') ?></th>
                            <th><?= __('Tipo Oferta') ?></th>
                            <th><?= __('Selecc Contrato') ?></th>
                            <th><?= __('Ubicacion Id') ?></th>
                            <th><?= __('Horario') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Email Oferta') ?></th>
                            <th><?= __('Cif Oferta') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($comercial->ofertas as $oferta) : ?>
                        <tr>
                            <td><?= h($oferta->id) ?></td>
                            <td><?= h($oferta->tipo_entidad) ?></td>
                            <td><?= h($oferta->duracion_contrato) ?></td>
                            <td><?= h($oferta->fecha_firma) ?></td>
                            <td><?= h($oferta->fecha_ini) ?></td>
                            <td><?= h($oferta->proveedor_unico) ?></td>
                            <td><?= h($oferta->ofertamos_medidodia) ?></td>
                            <td><?= h($oferta->ofertamos_matinera) ?></td>
                            <td><?= h($oferta->tipo_oferta) ?></td>
                            <td><?= h($oferta->selecc_contrato) ?></td>
                            <td><?= h($oferta->ubicacion_id) ?></td>
                            <td><?= h($oferta->horario) ?></td>
                            <td><?= h($oferta->importe) ?></td>
                            <td><?= h($oferta->created) ?></td>
                            <td><?= h($oferta->modified) ?></td>
                            <td><?= h($oferta->email_oferta) ?></td>
                            <td><?= h($oferta->cif_oferta) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ofertas', 'action' => 'view', $oferta->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ofertas', 'action' => 'edit', $oferta->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Ofertas', 'action' => 'delete', $oferta->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $oferta->id),
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