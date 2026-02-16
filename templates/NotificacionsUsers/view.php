<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NotificacionsUser $notificacionsUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Notificacions User'), ['action' => 'edit', $notificacionsUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Notificacions User'), ['action' => 'delete', $notificacionsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificacionsUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notificacions Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Notificacions User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notificacionsUsers view content">
            <h3><?= h($notificacionsUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Notificacion') ?></th>
                    <td><?= $notificacionsUser->hasValue('notificacion') ? $this->Html->link($notificacionsUser->notificacion->nombre, ['controller' => 'Notificacions', 'action' => 'view', $notificacionsUser->notificacion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $notificacionsUser->hasValue('user') ? $this->Html->link($notificacionsUser->user->email, ['controller' => 'Users', 'action' => 'view', $notificacionsUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($notificacionsUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($notificacionsUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($notificacionsUser->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>