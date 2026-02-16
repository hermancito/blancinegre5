<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NotifcolegiosUser $notifcolegiosUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Notifcolegios User'), ['action' => 'edit', $notifcolegiosUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Notifcolegios User'), ['action' => 'delete', $notifcolegiosUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notifcolegiosUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notifcolegios Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Notifcolegios User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notifcolegiosUsers view content">
            <h3><?= h($notifcolegiosUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Notifcolegio') ?></th>
                    <td><?= $notifcolegiosUser->hasValue('notifcolegio') ? $this->Html->link($notifcolegiosUser->notifcolegio->nombre, ['controller' => 'Notifcolegios', 'action' => 'view', $notifcolegiosUser->notifcolegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $notifcolegiosUser->hasValue('user') ? $this->Html->link($notifcolegiosUser->user->email, ['controller' => 'Users', 'action' => 'view', $notifcolegiosUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($notifcolegiosUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($notifcolegiosUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($notifcolegiosUser->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>