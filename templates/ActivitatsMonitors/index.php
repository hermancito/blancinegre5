<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsMonitor> $activitatsMonitors
 */
?>
<div class="activitatsMonitors index content">
    <?= $this->Html->link(__('New Activitats Monitor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitats Monitors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th><?= $this->Paginator->sort('monitor_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsMonitors as $activitatsMonitor): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsMonitor->id) ?></td>
                    <td><?= $activitatsMonitor->hasValue('activitat') ? $this->Html->link($activitatsMonitor->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsMonitor->activitat->id]) : '' ?></td>
                    <td><?= $activitatsMonitor->hasValue('monitor') ? $this->Html->link($activitatsMonitor->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $activitatsMonitor->monitor->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsMonitor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsMonitor->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsMonitor->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsMonitor->id),
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