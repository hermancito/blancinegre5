<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DiasVolante> $diasVolantes
 */
?>
<div class="diasVolantes index content">
    <?= $this->Html->link(__('New Dias Volante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dias Volantes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('dia_id') ?></th>
                    <th><?= $this->Paginator->sort('volante_id') ?></th>
                    <th><?= $this->Paginator->sort('hora_ini') ?></th>
                    <th><?= $this->Paginator->sort('hora_fin') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diasVolantes as $diasVolante): ?>
                <tr>
                    <td><?= $this->Number->format($diasVolante->id) ?></td>
                    <td><?= $diasVolante->hasValue('dia') ? $this->Html->link($diasVolante->dia->id, ['controller' => 'Dias', 'action' => 'view', $diasVolante->dia->id]) : '' ?></td>
                    <td><?= $diasVolante->hasValue('volante') ? $this->Html->link($diasVolante->volante->id, ['controller' => 'Volantes', 'action' => 'view', $diasVolante->volante->id]) : '' ?></td>
                    <td><?= h($diasVolante->hora_ini) ?></td>
                    <td><?= h($diasVolante->hora_fin) ?></td>
                    <td><?= h($diasVolante->created) ?></td>
                    <td><?= h($diasVolante->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $diasVolante->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diasVolante->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $diasVolante->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $diasVolante->id),
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