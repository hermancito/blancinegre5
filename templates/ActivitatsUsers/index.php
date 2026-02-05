<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsUser> $activitatsUsers
 */
?>
<div class="activitatsUsers index content">
    <?= $this->Html->link(__('New Activitats User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitats Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsUsers as $activitatsUser): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsUser->id) ?></td>
                    <td><?= $activitatsUser->hasValue('activitat') ? $this->Html->link($activitatsUser->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsUser->activitat->id]) : '' ?></td>
                    <td><?= $activitatsUser->hasValue('user') ? $this->Html->link($activitatsUser->user->email, ['controller' => 'Users', 'action' => 'view', $activitatsUser->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsUser->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsUser->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsUser->id),
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