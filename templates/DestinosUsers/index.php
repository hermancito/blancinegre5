<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\DestinosUser> $destinosUsers
 */
?>
<div class="destinosUsers index content">
    <?= $this->Html->link(__('New Destinos User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Destinos Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('destino_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($destinosUsers as $destinosUser): ?>
                <tr>
                    <td><?= $this->Number->format($destinosUser->id) ?></td>
                    <td><?= $destinosUser->hasValue('destino') ? $this->Html->link($destinosUser->destino->id, ['controller' => 'Destinos', 'action' => 'view', $destinosUser->destino->id]) : '' ?></td>
                    <td><?= $destinosUser->hasValue('user') ? $this->Html->link($destinosUser->user->email, ['controller' => 'Users', 'action' => 'view', $destinosUser->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $destinosUser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $destinosUser->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $destinosUser->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $destinosUser->id),
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