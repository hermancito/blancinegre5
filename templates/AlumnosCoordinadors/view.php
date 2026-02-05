<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AlumnosCoordinador $alumnosCoordinador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumnos Coordinador'), ['action' => 'edit', $alumnosCoordinador->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumnos Coordinador'), ['action' => 'delete', $alumnosCoordinador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnosCoordinador->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnos Coordinadors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumnos Coordinador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="alumnosCoordinadors view content">
            <h3><?= h($alumnosCoordinador->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Alumno') ?></th>
                    <td><?= $alumnosCoordinador->hasValue('alumno') ? $this->Html->link($alumnosCoordinador->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $alumnosCoordinador->alumno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Coordinador') ?></th>
                    <td><?= $alumnosCoordinador->hasValue('coordinador') ? $this->Html->link($alumnosCoordinador->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $alumnosCoordinador->coordinador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($alumnosCoordinador->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>