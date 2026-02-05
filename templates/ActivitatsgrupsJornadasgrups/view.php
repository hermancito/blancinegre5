<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsJornadasgrup $activitatsgrupsJornadasgrup
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitatsgrups Jornadasgrup'), ['action' => 'edit', $activitatsgrupsJornadasgrup->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitatsgrups Jornadasgrup'), ['action' => 'delete', $activitatsgrupsJornadasgrup->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsJornadasgrup->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitatsgrups Jornadasgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitatsgrups Jornadasgrup'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsJornadasgrups view content">
            <h3><?= h($activitatsgrupsJornadasgrup->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitatsgrup') ?></th>
                    <td><?= $activitatsgrupsJornadasgrup->hasValue('activitatsgrup') ? $this->Html->link($activitatsgrupsJornadasgrup->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrupsJornadasgrup->activitatsgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Jornadasgrup') ?></th>
                    <td><?= $activitatsgrupsJornadasgrup->hasValue('jornadasgrup') ? $this->Html->link($activitatsgrupsJornadasgrup->jornadasgrup->codigo, ['controller' => 'Jornadasgrups', 'action' => 'view', $activitatsgrupsJornadasgrup->jornadasgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsgrupsJornadasgrup->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>