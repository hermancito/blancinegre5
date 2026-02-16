<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\NotificacionsUser> $notificacionsUsers
 */
?>
<div class="notificacionsUsers index content">
    <?= $this->Html->link(__('New Notificacions User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notificacions Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('notificacion_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notificacionsUsers as $notificacionsUser): ?>
                <tr>
                    <td><?= $this->Number->format($notificacionsUser->id) ?></td>
                    <td><?= $notificacionsUser->hasValue('notificacion') ? $this->Html->link($notificacionsUser->notificacion->nombre, ['controller' => 'Notificacions', 'action' => 'view', $notificacionsUser->notificacion->id]) : '' ?></td>
                    <td><?= $notificacionsUser->hasValue('user') ? $this->Html->link($notificacionsUser->user->email, ['controller' => 'Users', 'action' => 'view', $notificacionsUser->user->id]) : '' ?></td>
                    <td><?= h($notificacionsUser->created) ?></td>
                    <td><?= h($notificacionsUser->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $notificacionsUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notificacionsUser->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $notificacionsUser->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $notificacionsUser->id),
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