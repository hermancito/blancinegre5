<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsMonitor $activitatsgrupsMonitor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitatsgrups Monitor'), ['action' => 'edit', $activitatsgrupsMonitor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitatsgrups Monitor'), ['action' => 'delete', $activitatsgrupsMonitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsMonitor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitatsgrups Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitatsgrups Monitor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsMonitors view content">
            <h3><?= h($activitatsgrupsMonitor->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitatsgrup') ?></th>
                    <td><?= $activitatsgrupsMonitor->hasValue('activitatsgrup') ? $this->Html->link($activitatsgrupsMonitor->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrupsMonitor->activitatsgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Monitor') ?></th>
                    <td><?= $activitatsgrupsMonitor->hasValue('monitor') ? $this->Html->link($activitatsgrupsMonitor->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $activitatsgrupsMonitor->monitor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsgrupsMonitor->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>