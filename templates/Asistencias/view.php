<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asistencia $asistencia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Asistencia'), ['action' => 'edit', $asistencia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Asistencia'), ['action' => 'delete', $asistencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $asistencia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Asistencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Asistencia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="asistencias view content">
            <h3><?= h($asistencia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Alumno') ?></th>
                    <td><?= $asistencia->hasValue('alumno') ? $this->Html->link($asistencia->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $asistencia->alumno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitatsgrup') ?></th>
                    <td><?= $asistencia->hasValue('activitatsgrup') ? $this->Html->link($asistencia->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $asistencia->activitatsgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($asistencia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($asistencia->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($asistencia->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>