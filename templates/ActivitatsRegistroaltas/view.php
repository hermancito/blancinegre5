<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsRegistroalta $activitatsRegistroalta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitats Registroalta'), ['action' => 'edit', $activitatsRegistroalta->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitats Registroalta'), ['action' => 'delete', $activitatsRegistroalta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsRegistroalta->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitats Registroaltas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitats Registroalta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsRegistroaltas view content">
            <h3><?= h($activitatsRegistroalta->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Registroalta') ?></th>
                    <td><?= $activitatsRegistroalta->hasValue('registroalta') ? $this->Html->link($activitatsRegistroalta->registroalta->alta_amplia, ['controller' => 'Registroaltas', 'action' => 'view', $activitatsRegistroalta->registroalta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $activitatsRegistroalta->hasValue('activitat') ? $this->Html->link($activitatsRegistroalta->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsRegistroalta->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsRegistroalta->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>