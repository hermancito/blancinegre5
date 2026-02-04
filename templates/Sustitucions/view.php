<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sustitucion $sustitucion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sustitucion'), ['action' => 'edit', $sustitucion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sustitucion'), ['action' => 'delete', $sustitucion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sustitucion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sustitucions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sustitucion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sustitucions view content">
            <h3><?= h($sustitucion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Monitor') ?></th>
                    <td><?= $sustitucion->hasValue('monitor') ? $this->Html->link($sustitucion->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $sustitucion->monitor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $sustitucion->hasValue('colegio') ? $this->Html->link($sustitucion->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $sustitucion->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $sustitucion->hasValue('activitat') ? $this->Html->link($sustitucion->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $sustitucion->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Motivo') ?></th>
                    <td><?= h($sustitucion->motivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $sustitucion->hasValue('user') ? $this->Html->link($sustitucion->user->email, ['controller' => 'Users', 'action' => 'view', $sustitucion->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin1') ?></th>
                    <td><?= h($sustitucion->comodin1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin2') ?></th>
                    <td><?= h($sustitucion->comodin2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sustitucion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Coste') ?></th>
                    <td><?= $sustitucion->coste === null ? '' : $this->Number->format($sustitucion->coste) ?></td>
                </tr>
                <tr>
                    <th><?= __('Salario') ?></th>
                    <td><?= $sustitucion->salario === null ? '' : $this->Number->format($sustitucion->salario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha') ?></th>
                    <td><?= h($sustitucion->fecha) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Ini') ?></th>
                    <td><?= h($sustitucion->hora_ini) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Fin') ?></th>
                    <td><?= h($sustitucion->hora_fin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($sustitucion->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($sustitucion->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Justificada') ?></th>
                    <td><?= $sustitucion->justificada ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>