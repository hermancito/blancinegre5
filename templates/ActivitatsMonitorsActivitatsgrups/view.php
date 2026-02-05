<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsMonitorsActivitatsgrup $activitatsMonitorsActivitatsgrup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitats Monitors Activitatsgrup'), ['action' => 'edit', $activitatsMonitorsActivitatsgrup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitats Monitors Activitatsgrup'), ['action' => 'delete', $activitatsMonitorsActivitatsgrup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsMonitorsActivitatsgrup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitats Monitors Activitatsgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitats Monitors Activitatsgrup'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsMonitorsActivitatsgrups view content">
            <h3><?= h($activitatsMonitorsActivitatsgrup->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitats Monitor') ?></th>
                    <td><?= $activitatsMonitorsActivitatsgrup->hasValue('activitats_monitor') ? $this->Html->link($activitatsMonitorsActivitatsgrup->activitats_monitor->id, ['controller' => 'ActivitatsMonitors', 'action' => 'view', $activitatsMonitorsActivitatsgrup->activitats_monitor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitatsgrup') ?></th>
                    <td><?= $activitatsMonitorsActivitatsgrup->hasValue('activitatsgrup') ? $this->Html->link($activitatsMonitorsActivitatsgrup->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsMonitorsActivitatsgrup->activitatsgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsMonitorsActivitatsgrup->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>