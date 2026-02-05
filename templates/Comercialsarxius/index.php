<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comercialsarxius> $comercialsarxius
 */
?>
<div class="comercialsarxius index content">
    <?= $this->Html->link(__('New Comercialsarxius'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comercialsarxius') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('comercial_id') ?></th>
                    <th><?= $this->Paginator->sort('pdf') ?></th>
                    <th><?= $this->Paginator->sort('pdf_dir') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comercialsarxius as $comercialsarxius): ?>
                <tr>
                    <td><?= $this->Number->format($comercialsarxius->id) ?></td>
                    <td><?= $comercialsarxius->hasValue('comercial') ? $this->Html->link($comercialsarxius->comercial->codigo, ['controller' => 'Comercials', 'action' => 'view', $comercialsarxius->comercial->id]) : '' ?></td>
                    <td><?= h($comercialsarxius->pdf) ?></td>
                    <td><?= h($comercialsarxius->pdf_dir) ?></td>
                    <td><?= h($comercialsarxius->created) ?></td>
                    <td><?= h($comercialsarxius->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comercialsarxius->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comercialsarxius->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $comercialsarxius->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $comercialsarxius->id),
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