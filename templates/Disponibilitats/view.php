<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disponibilitat $disponibilitat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Disponibilitat'), ['action' => 'edit', $disponibilitat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Disponibilitat'), ['action' => 'delete', $disponibilitat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disponibilitat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Disponibilitats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Disponibilitat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="disponibilitats view content">
            <h3><?= h($disponibilitat->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Monitor') ?></th>
                    <td><?= $disponibilitat->hasValue('monitor') ? $this->Html->link($disponibilitat->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $disponibilitat->monitor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dia') ?></th>
                    <td><?= $disponibilitat->hasValue('dia') ? $this->Html->link($disponibilitat->dia->id, ['controller' => 'Dias', 'action' => 'view', $disponibilitat->dia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= $disponibilitat->hasValue('hora') ? $this->Html->link($disponibilitat->hora->id, ['controller' => 'Horas', 'action' => 'view', $disponibilitat->hora->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tiponodisponibilitat') ?></th>
                    <td><?= $disponibilitat->hasValue('tiponodisponibilitat') ? $this->Html->link($disponibilitat->tiponodisponibilitat->descripc, ['controller' => 'Tiponodisponibilitats', 'action' => 'view', $disponibilitat->tiponodisponibilitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitatsgrup') ?></th>
                    <td><?= $disponibilitat->hasValue('activitatsgrup') ? $this->Html->link($disponibilitat->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $disponibilitat->activitatsgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($disponibilitat->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($disponibilitat->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($disponibilitat->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponible') ?></th>
                    <td><?= $disponibilitat->disponible ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>