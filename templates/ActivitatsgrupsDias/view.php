<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsDia $activitatsgrupsDia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitatsgrups Dia'), ['action' => 'edit', $activitatsgrupsDia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitatsgrups Dia'), ['action' => 'delete', $activitatsgrupsDia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsDia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitatsgrups Dias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitatsgrups Dia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsDias view content">
            <h3><?= h($activitatsgrupsDia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitatsgrup') ?></th>
                    <td><?= $activitatsgrupsDia->hasValue('activitatsgrup') ? $this->Html->link($activitatsgrupsDia->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrupsDia->activitatsgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dia') ?></th>
                    <td><?= $activitatsgrupsDia->hasValue('dia') ? $this->Html->link($activitatsgrupsDia->dia->id, ['controller' => 'Dias', 'action' => 'view', $activitatsgrupsDia->dia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsgrupsDia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Ini') ?></th>
                    <td><?= h($activitatsgrupsDia->hora_ini) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Fin') ?></th>
                    <td><?= h($activitatsgrupsDia->hora_fin) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>