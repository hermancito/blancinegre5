<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DestinosUser $destinosUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Destinos User'), ['action' => 'edit', $destinosUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Destinos User'), ['action' => 'delete', $destinosUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $destinosUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Destinos Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Destinos User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="destinosUsers view content">
            <h3><?= h($destinosUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Destino') ?></th>
                    <td><?= $destinosUser->hasValue('destino') ? $this->Html->link($destinosUser->destino->id, ['controller' => 'Destinos', 'action' => 'view', $destinosUser->destino->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $destinosUser->hasValue('user') ? $this->Html->link($destinosUser->user->email, ['controller' => 'Users', 'action' => 'view', $destinosUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($destinosUser->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>