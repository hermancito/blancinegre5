<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ColegiosNotifcolegio> $colegiosNotifcolegios
 */
?>
<div class="colegiosNotifcolegios index content">
    <?= $this->Html->link(__('New Colegios Notifcolegio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Colegios Notifcolegios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('notifcolegio_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($colegiosNotifcolegios as $colegiosNotifcolegio): ?>
                <tr>
                    <td><?= $this->Number->format($colegiosNotifcolegio->id) ?></td>
                    <td><?= $colegiosNotifcolegio->hasValue('colegio') ? $this->Html->link($colegiosNotifcolegio->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiosNotifcolegio->colegio->id]) : '' ?></td>
                    <td><?= $colegiosNotifcolegio->hasValue('notifcolegio') ? $this->Html->link($colegiosNotifcolegio->notifcolegio->nombre, ['controller' => 'Notifcolegios', 'action' => 'view', $colegiosNotifcolegio->notifcolegio->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $colegiosNotifcolegio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colegiosNotifcolegio->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $colegiosNotifcolegio->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $colegiosNotifcolegio->id),
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