<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsAlumno $activitatsgrupsAlumno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitatsgrups Alumno'), ['action' => 'edit', $activitatsgrupsAlumno->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitatsgrups Alumno'), ['action' => 'delete', $activitatsgrupsAlumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsAlumno->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitatsgrups Alumnos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitatsgrups Alumno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsAlumnos view content">
            <h3><?= h($activitatsgrupsAlumno->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitatsgrup') ?></th>
                    <td><?= $activitatsgrupsAlumno->hasValue('activitatsgrup') ? $this->Html->link($activitatsgrupsAlumno->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrupsAlumno->activitatsgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Alumno') ?></th>
                    <td><?= $activitatsgrupsAlumno->hasValue('alumno') ? $this->Html->link($activitatsgrupsAlumno->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $activitatsgrupsAlumno->alumno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsgrupsAlumno->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>