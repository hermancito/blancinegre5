<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip $tip
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tip'), ['action' => 'edit', $tip->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tip'), ['action' => 'delete', $tip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tip->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tip'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tips view content">
            <h3><?= h($tip->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tip->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tip->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tip->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Texto Tip') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($tip->texto_tip)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Ofertas') ?></h4>
                <?php if (!empty($tip->ofertas)) : ?>
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
                            <th><?= __('Ubicacion Id') ?></th>
                            <th><?= __('Horario') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Email Oferta') ?></th>
                            <th><?= __('Cif Oferta') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tip->ofertas as $oferta) : ?>
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