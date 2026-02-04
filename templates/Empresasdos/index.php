<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Empresasdo> $empresasdos
 */
?>
<div class="empresasdos index content">
    <?= $this->Html->link(__('New Empresasdo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empresasdos') ?></h3>
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
                <?php foreach ($empresasdos as $empresasdo): ?>
                <tr>
                    <td><?= $this->Number->format($empresasdo->id) ?></td>
                    <td><?= h($empresasdo->nom_empresa) ?></td>
                    <td><?= h($empresasdo->created) ?></td>
                    <td><?= h($empresasdo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empresasdo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresasdo->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $empresasdo->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $empresasdo->id),
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