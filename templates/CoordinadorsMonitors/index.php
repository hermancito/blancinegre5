<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\CoordinadorsMonitor> $coordinadorsMonitors
 */
?>
<div class="coordinadorsMonitors index content">
    <?= $this->Html->link(__('New Coordinadors Monitor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Coordinadors Monitors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('coordinador_id') ?></th>
                    <th><?= $this->Paginator->sort('monitor_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coordinadorsMonitors as $coordinadorsMonitor): ?>
                <tr>
                    <td><?= $this->Number->format($coordinadorsMonitor->id) ?></td>
                    <td><?= $coordinadorsMonitor->hasValue('coordinador') ? $this->Html->link($coordinadorsMonitor->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $coordinadorsMonitor->coordinador->id]) : '' ?></td>
                    <td><?= $coordinadorsMonitor->hasValue('monitor') ? $this->Html->link($coordinadorsMonitor->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $coordinadorsMonitor->monitor->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coordinadorsMonitor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordinadorsMonitor->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $coordinadorsMonitor->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $coordinadorsMonitor->id),
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