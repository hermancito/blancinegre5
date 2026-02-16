<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notifmonitor $notifmonitor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Notifmonitor'), ['action' => 'edit', $notifmonitor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Notifmonitor'), ['action' => 'delete', $notifmonitor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notifmonitor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notifmonitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Notifmonitor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notifmonitors view content">
            <h3><?= h($notifmonitor->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $notifmonitor->hasValue('user') ? $this->Html->link($notifmonitor->user->email, ['controller' => 'Users', 'action' => 'view', $notifmonitor->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($notifmonitor->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($notifmonitor->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo Dir') ?></th>
                    <td><?= h($notifmonitor->photo_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin') ?></th>
                    <td><?= h($notifmonitor->comodin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo Monitor') ?></th>
                    <td><?= h($notifmonitor->tipo_monitor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($notifmonitor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($notifmonitor->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($notifmonitor->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validado') ?></th>
                    <td><?= $notifmonitor->validado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($notifmonitor->descripc)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>