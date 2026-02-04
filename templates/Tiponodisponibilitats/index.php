<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tiponodisponibilitat> $tiponodisponibilitats
 */
?>
<div class="tiponodisponibilitats index content">
    <?= $this->Html->link(__('New Tiponodisponibilitat'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tiponodisponibilitats') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descripc') ?></th>
                    <th><?= $this->Paginator->sort('color') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tiponodisponibilitats as $tiponodisponibilitat): ?>
                <tr>
                    <td><?= $this->Number->format($tiponodisponibilitat->id) ?></td>
                    <td><?= h($tiponodisponibilitat->descripc) ?></td>
                    <td><?= h($tiponodisponibilitat->color) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tiponodisponibilitat->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiponodisponibilitat->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $tiponodisponibilitat->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $tiponodisponibilitat->id),
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