<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ubicacion $ubicacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ubicacion'), ['action' => 'edit', $ubicacion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ubicacion'), ['action' => 'delete', $ubicacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ubicacion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ubicacions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ubicacion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ubicacions view content">
            <h3><?= h($ubicacion->intervalo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Intervalo') ?></th>
                    <td><?= h($ubicacion->intervalo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accion') ?></th>
                    <td><?= h($ubicacion->accion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ubicacion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $this->Number->format($ubicacion->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ubicacion->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ubicacion->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ofertas') ?></h4>
                <?php if (!empty($ubicacion->ofertas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Comercial Id') ?></th>
                            <th><?= __('Tipo Entidad') ?></th>
                            <th><?= __('Duracion Contrato') ?></th>
                            <th><?= __('Fecha Firma') ?></th>
                            <th><?= __('Fecha Ini') ?></th>
                            <th><?= __('Proveedor Unico') ?></th>
                            <th><?= __('Ofertamos Medidodia') ?></th>
                            <th><?= __('Ofertamos Matinera') ?></th>
                            <th><?= __('Tipo Oferta') ?></th>
                            <th><?= __('Selecc Contrato') ?></th>
                            <th><?= __('Horario') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Email Oferta') ?></th>
                            <th><?= __('Cif Oferta') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ubicacion->ofertas as $oferta) : ?>
                        <tr>
                            <td><?= h($oferta->id) ?></td>
                            <td><?= h($oferta->comercial_id) ?></td>
                            <td><?= h($oferta->tipo_entidad) ?></td>
                            <td><?= h($oferta->duracion_contrato) ?></td>
                            <td><?= h($oferta->fecha_firma) ?></td>
                            <td><?= h($oferta->fecha_ini) ?></td>
                            <td><?= h($oferta->proveedor_unico) ?></td>
                            <td><?= h($oferta->ofertamos_medidodia) ?></td>
                            <td><?= h($oferta->ofertamos_matinera) ?></td>
                            <td><?= h($oferta->tipo_oferta) ?></td>
                            <td><?= h($oferta->selecc_contrato) ?></td>
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