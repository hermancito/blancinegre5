<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsColegio $activitatsColegio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitats Colegio'), ['action' => 'edit', $activitatsColegio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitats Colegio'), ['action' => 'delete', $activitatsColegio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsColegio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitats Colegios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitats Colegio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsColegios view content">
            <h3><?= h($activitatsColegio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $activitatsColegio->hasValue('activitat') ? $this->Html->link($activitatsColegio->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsColegio->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $activitatsColegio->hasValue('colegio') ? $this->Html->link($activitatsColegio->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $activitatsColegio->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsColegio->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>