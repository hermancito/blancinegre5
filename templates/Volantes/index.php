<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Volante> $volantes
 */
?>
<div class="volantes index content">
    <?= $this->Html->link(__('New Volante'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Volantes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('monitor_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($volantes as $volante): ?>
                <tr>
                    <td><?= $this->Number->format($volante->id) ?></td>
                    <td><?= $volante->hasValue('monitor') ? $this->Html->link($volante->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $volante->monitor->id]) : '' ?></td>
                    <td><?= h($volante->created) ?></td>
                    <td><?= h($volante->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $volante->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $volante->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $volante->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $volante->id),
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