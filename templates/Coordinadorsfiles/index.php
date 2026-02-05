<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Coordinadorsfile> $coordinadorsfiles
 */
?>
<div class="coordinadorsfiles index content">
    <?= $this->Html->link(__('New Coordinadorsfile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Coordinadorsfiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('coordinador_id') ?></th>
                    <th><?= $this->Paginator->sort('file') ?></th>
                    <th><?= $this->Paginator->sort('file_dir') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coordinadorsfiles as $coordinadorsfile): ?>
                <tr>
                    <td><?= $this->Number->format($coordinadorsfile->id) ?></td>
                    <td><?= $coordinadorsfile->hasValue('user') ? $this->Html->link($coordinadorsfile->user->email, ['controller' => 'Users', 'action' => 'view', $coordinadorsfile->user->id]) : '' ?></td>
                    <td><?= $coordinadorsfile->hasValue('coordinador') ? $this->Html->link($coordinadorsfile->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $coordinadorsfile->coordinador->id]) : '' ?></td>
                    <td><?= h($coordinadorsfile->file) ?></td>
                    <td><?= h($coordinadorsfile->file_dir) ?></td>
                    <td><?= h($coordinadorsfile->created) ?></td>
                    <td><?= h($coordinadorsfile->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coordinadorsfile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordinadorsfile->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $coordinadorsfile->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $coordinadorsfile->id),
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