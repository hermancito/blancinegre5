<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Evento'), ['action' => 'edit', $evento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Evento'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Eventos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Evento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="eventos view content">
            <h3><?= h($evento->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $evento->hasValue('user') ? $this->Html->link($evento->user->email, ['controller' => 'Users', 'action' => 'view', $evento->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Destino') ?></th>
                    <td><?= h($evento->destino) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin1') ?></th>
                    <td><?= h($evento->comodin1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin2') ?></th>
                    <td><?= h($evento->comodin2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($evento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Retribucion') ?></th>
                    <td><?= $evento->retribucion === null ? '' : $this->Number->format($evento->retribucion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dia') ?></th>
                    <td><?= h($evento->dia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Ini') ?></th>
                    <td><?= h($evento->hora_ini) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Fin') ?></th>
                    <td><?= h($evento->hora_fin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($evento->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($evento->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($evento->observ)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>