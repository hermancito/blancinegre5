<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Horarimonitor> $horarimonitors
 */
?>
<div class="horarimonitors index content">
    <?= $this->Html->link(__('New Horarimonitor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Horarimonitors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('hora') ?></th>
                    <th><?= $this->Paginator->sort('inic_fin') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('latitud') ?></th>
                    <th><?= $this->Paginator->sort('longitud') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($horarimonitors as $horarimonitor): ?>
                <tr>
                    <td><?= $this->Number->format($horarimonitor->id) ?></td>
                    <td><?= h($horarimonitor->fecha) ?></td>
                    <td><?= h($horarimonitor->hora) ?></td>
                    <td><?= h($horarimonitor->inic_fin) ?></td>
                    <td><?= $horarimonitor->hasValue('user') ? $this->Html->link($horarimonitor->user->email, ['controller' => 'Users', 'action' => 'view', $horarimonitor->user->id]) : '' ?></td>
                    <td><?= h($horarimonitor->latitud) ?></td>
                    <td><?= h($horarimonitor->longitud) ?></td>
                    <td><?= h($horarimonitor->created) ?></td>
                    <td><?= h($horarimonitor->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $horarimonitor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $horarimonitor->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $horarimonitor->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $horarimonitor->id),
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