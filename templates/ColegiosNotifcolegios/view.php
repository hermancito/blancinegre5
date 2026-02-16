<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ColegiosNotifcolegio $colegiosNotifcolegio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Colegios Notifcolegio'), ['action' => 'edit', $colegiosNotifcolegio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Colegios Notifcolegio'), ['action' => 'delete', $colegiosNotifcolegio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colegiosNotifcolegio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colegios Notifcolegios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Colegios Notifcolegio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiosNotifcolegios view content">
            <h3><?= h($colegiosNotifcolegio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $colegiosNotifcolegio->hasValue('colegio') ? $this->Html->link($colegiosNotifcolegio->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiosNotifcolegio->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Notifcolegio') ?></th>
                    <td><?= $colegiosNotifcolegio->hasValue('notifcolegio') ? $this->Html->link($colegiosNotifcolegio->notifcolegio->nombre, ['controller' => 'Notifcolegios', 'action' => 'view', $colegiosNotifcolegio->notifcolegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($colegiosNotifcolegio->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>