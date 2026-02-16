<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oferta $oferta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Oferta'), ['action' => 'edit', $oferta->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Oferta'), ['action' => 'delete', $oferta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $oferta->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ofertas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Oferta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertas view content">
            <h3><?= h($oferta->selecc_contrato) ?></h3>
            <table>
                <tr>
                    <th><?= __('Comercial') ?></th>
                    <td><?= $oferta->hasValue('comercial') ? $this->Html->link($oferta->comercial->codigo, ['controller' => 'Comercials', 'action' => 'view', $oferta->comercial->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Entidad') ?></th>
                    <td><?= h($oferta->tipo_entidad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Proveedor Unico') ?></th>
                    <td><?= h($oferta->proveedor_unico) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ofertamos Medidodia') ?></th>
                    <td><?= h($oferta->ofertamos_medidodia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ofertamos Matinera') ?></th>
                    <td><?= h($oferta->ofertamos_matinera) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Oferta') ?></th>
                    <td><?= h($oferta->tipo_oferta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Selecc Contrato') ?></th>
                    <td><?= h($oferta->selecc_contrato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ubicacion') ?></th>
                    <td><?= $oferta->hasValue('ubicacion') ? $this->Html->link($oferta->ubicacion->intervalo, ['controller' => 'Ubicacions', 'action' => 'view', $oferta->ubicacion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Horario') ?></th>
                    <td><?= h($oferta->horario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Oferta') ?></th>
                    <td><?= h($oferta->email_oferta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cif Oferta') ?></th>
                    <td><?= h($oferta->cif_oferta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($oferta->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Duracion Contrato') ?></th>
                    <td><?= $this->Number->format($oferta->duracion_contrato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $oferta->importe === null ? '' : $this->Number->format($oferta->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Firma') ?></th>
                    <td><?= h($oferta->fecha_firma) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Ini') ?></th>
                    <td><?= h($oferta->fecha_ini) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($oferta->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($oferta->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ofertaspreciosacts') ?></h4>
                <?php if (!empty($oferta->ofertaspreciosacts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nom Activitat') ?></th>
                            <th><?= __('Grupo') ?></th>
                            <th><?= __('Start') ?></th>
                            <th><?= __('Basic') ?></th>
                            <th><?= __('Advance') ?></th>
                            <th><?= __('Premium') ?></th>
                            <th><?= __('Premium Plus') ?></th>
                            <th><?= __('Ratio') ?></th>
                            <th><?= __('Material Observ') ?></th>
                            <th><?= __('Accion Horario') ?></th>
                            <th><?= __('Accion Ubicacion') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($oferta->ofertaspreciosacts as $ofertaspreciosact) : ?>
                        <tr>
                            <td><?= h($ofertaspreciosact->id) ?></td>
                            <td><?= h($ofertaspreciosact->nom_activitat) ?></td>
                            <td><?= h($ofertaspreciosact->grupo) ?></td>
                            <td><?= h($ofertaspreciosact->start) ?></td>
                            <td><?= h($ofertaspreciosact->basic) ?></td>
                            <td><?= h($ofertaspreciosact->advance) ?></td>
                            <td><?= h($ofertaspreciosact->premium) ?></td>
                            <td><?= h($ofertaspreciosact->premium_plus) ?></td>
                            <td><?= h($ofertaspreciosact->ratio) ?></td>
                            <td><?= h($ofertaspreciosact->material_observ) ?></td>
                            <td><?= h($ofertaspreciosact->accion_horario) ?></td>
                            <td><?= h($ofertaspreciosact->accion_ubicacion) ?></td>
                            <td><?= h($ofertaspreciosact->created) ?></td>
                            <td><?= h($ofertaspreciosact->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ofertaspreciosacts', 'action' => 'view', $ofertaspreciosact->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ofertaspreciosacts', 'action' => 'edit', $ofertaspreciosact->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Ofertaspreciosacts', 'action' => 'delete', $ofertaspreciosact->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $ofertaspreciosact->id),
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
                <h4><?= __('Related Tips') ?></h4>
                <?php if (!empty($oferta->tips)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Texto Tip') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($oferta->tips as $tip) : ?>
                        <tr>
                            <td><?= h($tip->id) ?></td>
                            <td><?= h($tip->texto_tip) ?></td>
                            <td><?= h($tip->created) ?></td>
                            <td><?= h($tip->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Tips', 'action' => 'view', $tip->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Tips', 'action' => 'edit', $tip->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Tips', 'action' => 'delete', $tip->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $tip->id),
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