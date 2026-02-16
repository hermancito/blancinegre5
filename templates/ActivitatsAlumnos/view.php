<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsAlumno $activitatsAlumno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitats Alumno'), ['action' => 'edit', $activitatsAlumno->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitats Alumno'), ['action' => 'delete', $activitatsAlumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsAlumno->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitats Alumnos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitats Alumno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsAlumnos view content">
            <h3><?= h($activitatsAlumno->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $activitatsAlumno->hasValue('activitat') ? $this->Html->link($activitatsAlumno->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsAlumno->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Alumno') ?></th>
                    <td><?= $activitatsAlumno->hasValue('alumno') ? $this->Html->link($activitatsAlumno->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $activitatsAlumno->alumno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsAlumno->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>