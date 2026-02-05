<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Colegiofilesfamilia> $colegiofilesfamilias
 */
?>
<div class="colegiofilesfamilias index content">
    <?= $this->Html->link(__('New Colegiofilesfamilia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Colegiofilesfamilias') ?></h3>
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
                <?php foreach ($colegiofilesfamilias as $colegiofilesfamilia): ?>
                <tr>
                    <td><?= $this->Number->format($colegiofilesfamilia->id) ?></td>
                    <td><?= $colegiofilesfamilia->hasValue('user') ? $this->Html->link($colegiofilesfamilia->user->email, ['controller' => 'Users', 'action' => 'view', $colegiofilesfamilia->user->id]) : '' ?></td>
                    <td><?= $colegiofilesfamilia->hasValue('colegio') ? $this->Html->link($colegiofilesfamilia->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiofilesfamilia->colegio->id]) : '' ?></td>
                    <td><?= h($colegiofilesfamilia->file) ?></td>
                    <td><?= h($colegiofilesfamilia->file_dir) ?></td>
                    <td><?= h($colegiofilesfamilia->created) ?></td>
                    <td><?= h($colegiofilesfamilia->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $colegiofilesfamilia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colegiofilesfamilia->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $colegiofilesfamilia->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $colegiofilesfamilia->id),
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