<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ColegiosMonitor $colegiosMonitor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Colegios Monitor'), ['action' => 'edit', $colegiosMonitor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Colegios Monitor'), ['action' => 'delete', $colegiosMonitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colegiosMonitor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colegios Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Colegios Monitor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiosMonitors view content">
            <h3><?= h($colegiosMonitor->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $colegiosMonitor->hasValue('colegio') ? $this->Html->link($colegiosMonitor->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiosMonitor->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Monitor') ?></th>
                    <td><?= $colegiosMonitor->hasValue('monitor') ? $this->Html->link($colegiosMonitor->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $colegiosMonitor->monitor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($colegiosMonitor->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>