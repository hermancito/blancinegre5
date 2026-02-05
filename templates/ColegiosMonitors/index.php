<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ColegiosMonitor> $colegiosMonitors
 */
?>
<div class="colegiosMonitors index content">
    <?= $this->Html->link(__('New Colegios Monitor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Colegios Monitors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('monitor_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($colegiosMonitors as $colegiosMonitor): ?>
                <tr>
                    <td><?= $this->Number->format($colegiosMonitor->id) ?></td>
                    <td><?= $colegiosMonitor->hasValue('colegio') ? $this->Html->link($colegiosMonitor->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiosMonitor->colegio->id]) : '' ?></td>
                    <td><?= $colegiosMonitor->hasValue('monitor') ? $this->Html->link($colegiosMonitor->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $colegiosMonitor->monitor->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $colegiosMonitor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colegiosMonitor->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $colegiosMonitor->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $colegiosMonitor->id),
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