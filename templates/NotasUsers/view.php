<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NotasUser $notasUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Notas User'), ['action' => 'edit', $notasUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Notas User'), ['action' => 'delete', $notasUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notasUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notas Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Notas User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notasUsers view content">
            <h3><?= h($notasUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nota') ?></th>
                    <td><?= $notasUser->hasValue('nota') ? $this->Html->link($notasUser->nota->label, ['controller' => 'Notas', 'action' => 'view', $notasUser->nota->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $notasUser->hasValue('user') ? $this->Html->link($notasUser->user->email, ['controller' => 'Users', 'action' => 'view', $notasUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($notasUser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($notasUser->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($notasUser->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>