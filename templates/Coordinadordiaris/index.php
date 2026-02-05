<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Coordinadordiari> $coordinadordiaris
 */
?>
<div class="coordinadordiaris index content">
    <?= $this->Html->link(__('New Coordinadordiari'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Coordinadordiaris') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('coordinador_id') ?></th>
                    <th><?= $this->Paginator->sort('dia') ?></th>
                    <th><?= $this->Paginator->sort('hora_ini') ?></th>
                    <th><?= $this->Paginator->sort('hora_fin') ?></th>
                    <th><?= $this->Paginator->sort('intervencion_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('resuelta') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coordinadordiaris as $coordinadordiari): ?>
                <tr>
                    <td><?= $this->Number->format($coordinadordiari->id) ?></td>
                    <td><?= $coordinadordiari->hasValue('colegio') ? $this->Html->link($coordinadordiari->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $coordinadordiari->colegio->id]) : '' ?></td>
                    <td><?= $coordinadordiari->hasValue('coordinador') ? $this->Html->link($coordinadordiari->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $coordinadordiari->coordinador->id]) : '' ?></td>
                    <td><?= h($coordinadordiari->dia) ?></td>
                    <td><?= h($coordinadordiari->hora_ini) ?></td>
                    <td><?= h($coordinadordiari->hora_fin) ?></td>
                    <td><?= $coordinadordiari->hasValue('intervencion') ? $this->Html->link($coordinadordiari->intervencion->tipo_interv, ['controller' => 'Intervencions', 'action' => 'view', $coordinadordiari->intervencion->id]) : '' ?></td>
                    <td><?= h($coordinadordiari->created) ?></td>
                    <td><?= h($coordinadordiari->modified) ?></td>
                    <td><?= h($coordinadordiari->resuelta) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coordinadordiari->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordinadordiari->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $coordinadordiari->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $coordinadordiari->id),
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