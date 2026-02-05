<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Colegiofile> $colegiofiles
 */
?>
<div class="colegiofiles index content">
    <?= $this->Html->link(__('New Colegiofile'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Colegiofiles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('file') ?></th>
                    <th><?= $this->Paginator->sort('file_dir') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($colegiofiles as $colegiofile): ?>
                <tr>
                    <td><?= $this->Number->format($colegiofile->id) ?></td>
                    <td><?= $colegiofile->hasValue('user') ? $this->Html->link($colegiofile->user->email, ['controller' => 'Users', 'action' => 'view', $colegiofile->user->id]) : '' ?></td>
                    <td><?= $colegiofile->hasValue('colegio') ? $this->Html->link($colegiofile->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiofile->colegio->id]) : '' ?></td>
                    <td><?= h($colegiofile->file) ?></td>
                    <td><?= h($colegiofile->file_dir) ?></td>
                    <td><?= h($colegiofile->created) ?></td>
                    <td><?= h($colegiofile->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $colegiofile->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colegiofile->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $colegiofile->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $colegiofile->id),
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