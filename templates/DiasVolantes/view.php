<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiasVolante $diasVolante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dias Volante'), ['action' => 'edit', $diasVolante->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dias Volante'), ['action' => 'delete', $diasVolante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diasVolante->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dias Volantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dias Volante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="diasVolantes view content">
            <h3><?= h($diasVolante->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Dia') ?></th>
                    <td><?= $diasVolante->hasValue('dia') ? $this->Html->link($diasVolante->dia->id, ['controller' => 'Dias', 'action' => 'view', $diasVolante->dia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Volante') ?></th>
                    <td><?= $diasVolante->hasValue('volante') ? $this->Html->link($diasVolante->volante->id, ['controller' => 'Volantes', 'action' => 'view', $diasVolante->volante->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($diasVolante->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Ini') ?></th>
                    <td><?= h($diasVolante->hora_ini) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Fin') ?></th>
                    <td><?= h($diasVolante->hora_fin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($diasVolante->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($diasVolante->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>