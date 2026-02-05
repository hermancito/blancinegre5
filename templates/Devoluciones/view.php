<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devolucione $devolucione
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Devolucione'), ['action' => 'edit', $devolucione->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Devolucione'), ['action' => 'delete', $devolucione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $devolucione->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Devoluciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Devolucione'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="devoluciones view content">
            <h3><?= h($devolucione->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $devolucione->hasValue('colegio') ? $this->Html->link($devolucione->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $devolucione->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Alumno') ?></th>
                    <td><?= $devolucione->hasValue('alumno') ? $this->Html->link($devolucione->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $devolucione->alumno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Concepto') ?></th>
                    <td><?= h($devolucione->concepto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Actividad') ?></th>
                    <td><?= h($devolucione->actividad) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($devolucione->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $devolucione->importe === null ? '' : $this->Number->format($devolucione->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Dev') ?></th>
                    <td><?= h($devolucione->fecha_dev) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($devolucione->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($devolucione->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($devolucione->observ)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>