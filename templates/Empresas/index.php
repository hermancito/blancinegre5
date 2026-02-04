<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Empresa> $empresas
 */
?>
<div class="empresas index content">
    <?= $this->Html->link(__('New Empresa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empresas') ?></h3>
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
                <?php foreach ($empresas as $empresa): ?>
                <tr>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                    <td><?= h($empresa->nom_empresa) ?></td>
                    <td><?= h($empresa->created) ?></td>
                    <td><?= h($empresa->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $empresa->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $empresa->id),
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