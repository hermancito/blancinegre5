<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Oferta> $ofertas
 */
?>
<div class="ofertas index content">
    <?= $this->Html->link(__('New Oferta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ofertas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('comercial_id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_entidad') ?></th>
                    <th><?= $this->Paginator->sort('duracion_contrato') ?></th>
                    <th><?= $this->Paginator->sort('fecha_firma') ?></th>
                    <th><?= $this->Paginator->sort('fecha_ini') ?></th>
                    <th><?= $this->Paginator->sort('proveedor_unico') ?></th>
                    <th><?= $this->Paginator->sort('ofertamos_medidodia') ?></th>
                    <th><?= $this->Paginator->sort('ofertamos_matinera') ?></th>
                    <th><?= $this->Paginator->sort('tipo_oferta') ?></th>
                    <th><?= $this->Paginator->sort('selecc_contrato') ?></th>
                    <th><?= $this->Paginator->sort('ubicacion_id') ?></th>
                    <th><?= $this->Paginator->sort('horario') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('email_oferta') ?></th>
                    <th><?= $this->Paginator->sort('cif_oferta') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ofertas as $oferta): ?>
                <tr>
                    <td><?= $this->Number->format($oferta->id) ?></td>
                    <td><?= $oferta->hasValue('comercial') ? $this->Html->link($oferta->comercial->codigo, ['controller' => 'Comercials', 'action' => 'view', $oferta->comercial->id]) : '' ?></td>
                    <td><?= h($oferta->tipo_entidad) ?></td>
                    <td><?= $this->Number->format($oferta->duracion_contrato) ?></td>
                    <td><?= h($oferta->fecha_firma) ?></td>
                    <td><?= h($oferta->fecha_ini) ?></td>
                    <td><?= h($oferta->proveedor_unico) ?></td>
                    <td><?= h($oferta->ofertamos_medidodia) ?></td>
                    <td><?= h($oferta->ofertamos_matinera) ?></td>
                    <td><?= h($oferta->tipo_oferta) ?></td>
                    <td><?= h($oferta->selecc_contrato) ?></td>
                    <td><?= $oferta->hasValue('ubicacion') ? $this->Html->link($oferta->ubicacion->intervalo, ['controller' => 'Ubicacions', 'action' => 'view', $oferta->ubicacion->id]) : '' ?></td>
                    <td><?= h($oferta->horario) ?></td>
                    <td><?= $oferta->importe === null ? '' : $this->Number->format($oferta->importe) ?></td>
                    <td><?= h($oferta->created) ?></td>
                    <td><?= h($oferta->modified) ?></td>
                    <td><?= h($oferta->email_oferta) ?></td>
                    <td><?= h($oferta->cif_oferta) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $oferta->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $oferta->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $oferta->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $oferta->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>