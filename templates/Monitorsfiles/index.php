<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Monitorsfile> $monitorsfiles
 */
?>
<div class="monitorsfiles index content">
    <?= $this->Html->link(__('New Monitorsfile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Monitorsfiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('monitor_id') ?></th>
                    <th><?= $this->Paginator->sort('file') ?></th>
                    <th><?= $this->Paginator->sort('file_dir') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('todos_monit') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monitorsfiles as $monitorsfile): ?>
                <tr>
                    <td><?= $this->Number->format($monitorsfile->id) ?></td>
                    <td><?= $monitorsfile->hasValue('user') ? $this->Html->link($monitorsfile->user->email, ['controller' => 'Users', 'action' => 'view', $monitorsfile->user->id]) : '' ?></td>
                    <td><?= $monitorsfile->hasValue('monitor') ? $this->Html->link($monitorsfile->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $monitorsfile->monitor->id]) : '' ?></td>
                    <td><?= h($monitorsfile->file) ?></td>
                    <td><?= h($monitorsfile->file_dir) ?></td>
                    <td><?= h($monitorsfile->created) ?></td>
                    <td><?= h($monitorsfile->modified) ?></td>
                    <td><?= h($monitorsfile->todos_monit) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $monitorsfile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monitorsfile->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $monitorsfile->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $monitorsfile->id),
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