<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\NotifcolegiosUser> $notifcolegiosUsers
 */
?>
<div class="notifcolegiosUsers index content">
    <?= $this->Html->link(__('New Notifcolegios User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notifcolegios Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('notifcolegio_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notifcolegiosUsers as $notifcolegiosUser): ?>
                <tr>
                    <td><?= $this->Number->format($notifcolegiosUser->id) ?></td>
                    <td><?= $notifcolegiosUser->hasValue('notifcolegio') ? $this->Html->link($notifcolegiosUser->notifcolegio->nombre, ['controller' => 'Notifcolegios', 'action' => 'view', $notifcolegiosUser->notifcolegio->id]) : '' ?></td>
                    <td><?= $notifcolegiosUser->hasValue('user') ? $this->Html->link($notifcolegiosUser->user->email, ['controller' => 'Users', 'action' => 'view', $notifcolegiosUser->user->id]) : '' ?></td>
                    <td><?= h($notifcolegiosUser->created) ?></td>
                    <td><?= h($notifcolegiosUser->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $notifcolegiosUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notifcolegiosUser->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $notifcolegiosUser->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $notifcolegiosUser->id),
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