<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Empresastre> $empresastres
 */
?>
<div class="empresastres index content">
    <?= $this->Html->link(__('New Empresastre'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empresastres') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom_empresa') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresastres as $empresastre): ?>
                <tr>
                    <td><?= $this->Number->format($empresastre->id) ?></td>
                    <td><?= h($empresastre->nom_empresa) ?></td>
                    <td><?= h($empresastre->created) ?></td>
                    <td><?= h($empresastre->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empresastre->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresastre->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $empresastre->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $empresastre->id),
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