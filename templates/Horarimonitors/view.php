<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horarimonitor $horarimonitor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Horarimonitor'), ['action' => 'edit', $horarimonitor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Horarimonitor'), ['action' => 'delete', $horarimonitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $horarimonitor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Horarimonitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Horarimonitor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="horarimonitors view content">
            <h3><?= h($horarimonitor->inic_fin) ?></h3>
            <table>
                <tr>
                    <th><?= __('Inic Fin') ?></th>
                    <td><?= h($horarimonitor->inic_fin) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $horarimonitor->hasValue('user') ? $this->Html->link($horarimonitor->user->email, ['controller' => 'Users', 'action' => 'view', $horarimonitor->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Latitud') ?></th>
                    <td><?= h($horarimonitor->latitud) ?></td>
                </tr>
                <tr>
                    <th><?= __('Longitud') ?></th>
                    <td><?= h($horarimonitor->longitud) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($horarimonitor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($horarimonitor->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($horarimonitor->hora) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($horarimonitor->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($horarimonitor->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>