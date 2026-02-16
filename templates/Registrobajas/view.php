<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registrobaja $registrobaja
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Registrobaja'), ['action' => 'edit', $registrobaja->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registrobaja'), ['action' => 'delete', $registrobaja->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registrobaja->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registrobajas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registrobaja'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="registrobajas view content">
            <h3><?= h($registrobaja->motivo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Alumno') ?></th>
                    <td><?= $registrobaja->hasValue('alumno') ? $this->Html->link($registrobaja->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $registrobaja->alumno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitatsgrup') ?></th>
                    <td><?= $registrobaja->hasValue('activitatsgrup') ? $this->Html->link($registrobaja->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $registrobaja->activitatsgrup->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $registrobaja->hasValue('colegio') ? $this->Html->link($registrobaja->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $registrobaja->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Motivo') ?></th>
                    <td><?= h($registrobaja->motivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registrobaja->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Baja') ?></th>
                    <td><?= h($registrobaja->fecha_baja) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($registrobaja->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($registrobaja->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ejecutada') ?></th>
                    <td><?= $registrobaja->ejecutada ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($registrobaja->observ)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>