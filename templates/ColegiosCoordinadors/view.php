<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ColegiosCoordinador $colegiosCoordinador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Colegios Coordinador'), ['action' => 'edit', $colegiosCoordinador->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Colegios Coordinador'), ['action' => 'delete', $colegiosCoordinador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colegiosCoordinador->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colegios Coordinadors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Colegios Coordinador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiosCoordinadors view content">
            <h3><?= h($colegiosCoordinador->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $colegiosCoordinador->hasValue('colegio') ? $this->Html->link($colegiosCoordinador->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiosCoordinador->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Coordinador') ?></th>
                    <td><?= $colegiosCoordinador->hasValue('coordinador') ? $this->Html->link($colegiosCoordinador->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $colegiosCoordinador->coordinador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($colegiosCoordinador->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>