<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoordinadorsMonitor $coordinadorsMonitor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Coordinadors Monitor'), ['action' => 'edit', $coordinadorsMonitor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Coordinadors Monitor'), ['action' => 'delete', $coordinadorsMonitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinadorsMonitor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coordinadors Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Coordinadors Monitor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="coordinadorsMonitors view content">
            <h3><?= h($coordinadorsMonitor->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Coordinador') ?></th>
                    <td><?= $coordinadorsMonitor->hasValue('coordinador') ? $this->Html->link($coordinadorsMonitor->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $coordinadorsMonitor->coordinador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Monitor') ?></th>
                    <td><?= $coordinadorsMonitor->hasValue('monitor') ? $this->Html->link($coordinadorsMonitor->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $coordinadorsMonitor->monitor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($coordinadorsMonitor->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>