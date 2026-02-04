<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Jornadasgrup> $jornadasgrups
 */
?>
<div class="jornadasgrups index content">
    <?= $this->Html->link(__('New Jornadasgrup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Jornadasgrups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('anyo') ?></th>
                    <th><?= $this->Paginator->sort('variac_ini') ?></th>
                    <th><?= $this->Paginator->sort('variac_fin') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jornadasgrups as $jornadasgrup): ?>
                <tr>
                    <td><?= $this->Number->format($jornadasgrup->id) ?></td>
                    <td><?= h($jornadasgrup->codigo) ?></td>
                    <td><?= $this->Number->format($jornadasgrup->anyo) ?></td>
                    <td><?= $this->Number->format($jornadasgrup->variac_ini) ?></td>
                    <td><?= $this->Number->format($jornadasgrup->variac_fin) ?></td>
                    <td><?= h($jornadasgrup->created) ?></td>
                    <td><?= h($jornadasgrup->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $jornadasgrup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jornadasgrup->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $jornadasgrup->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $jornadasgrup->id),
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