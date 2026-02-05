<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsMonitorsActivitatsgrup> $activitatsMonitorsActivitatsgrups
 */
?>
<div class="activitatsMonitorsActivitatsgrups index content">
    <?= $this->Html->link(__('New Activitats Monitors Activitatsgrup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitats Monitors Activitatsgrups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitats_monitor_id') ?></th>
                    <th><?= $this->Paginator->sort('activitatsgrup_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsMonitorsActivitatsgrups as $activitatsMonitorsActivitatsgrup): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsMonitorsActivitatsgrup->id) ?></td>
                    <td><?= $activitatsMonitorsActivitatsgrup->hasValue('activitats_monitor') ? $this->Html->link($activitatsMonitorsActivitatsgrup->activitats_monitor->id, ['controller' => 'ActivitatsMonitors', 'action' => 'view', $activitatsMonitorsActivitatsgrup->activitats_monitor->id]) : '' ?></td>
                    <td><?= $activitatsMonitorsActivitatsgrup->hasValue('activitatsgrup') ? $this->Html->link($activitatsMonitorsActivitatsgrup->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsMonitorsActivitatsgrup->activitatsgrup->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsMonitorsActivitatsgrup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsMonitorsActivitatsgrup->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsMonitorsActivitatsgrup->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsMonitorsActivitatsgrup->id),
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