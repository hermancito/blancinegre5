<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Actualizautomatica> $actualizautomaticas
 */
?>
<div class="actualizautomaticas index content">
    <?= $this->Html->link(__('New Actualizautomatica'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Actualizautomaticas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo') ?></th>
                    <th><?= $this->Paginator->sort('anyo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($actualizautomaticas as $actualizautomatica): ?>
                <tr>
                    <td><?= $this->Number->format($actualizautomatica->id) ?></td>
                    <td><?= h($actualizautomatica->tipo) ?></td>
                    <td><?= $this->Number->format($actualizautomatica->anyo) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $actualizautomatica->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $actualizautomatica->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $actualizautomatica->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $actualizautomatica->id),
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