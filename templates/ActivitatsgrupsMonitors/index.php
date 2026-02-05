<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsgrupsMonitor> $activitatsgrupsMonitors
 */
?>
<div class="activitatsgrupsMonitors index content">
    <?= $this->Html->link(__('New Activitatsgrups Monitor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitatsgrups Monitors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitatsgrup_id') ?></th>
                    <th><?= $this->Paginator->sort('monitor_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsgrupsMonitors as $activitatsgrupsMonitor): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsgrupsMonitor->id) ?></td>
                    <td><?= $activitatsgrupsMonitor->hasValue('activitatsgrup') ? $this->Html->link($activitatsgrupsMonitor->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrupsMonitor->activitatsgrup->id]) : '' ?></td>
                    <td><?= $activitatsgrupsMonitor->hasValue('monitor') ? $this->Html->link($activitatsgrupsMonitor->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $activitatsgrupsMonitor->monitor->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsgrupsMonitor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsgrupsMonitor->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsgrupsMonitor->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsMonitor->id),
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