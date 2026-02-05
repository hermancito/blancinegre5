<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsUser $activitatsUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitats User'), ['action' => 'edit', $activitatsUser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitats User'), ['action' => 'delete', $activitatsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsUser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitats Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitats User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsUsers view content">
            <h3><?= h($activitatsUser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $activitatsUser->hasValue('activitat') ? $this->Html->link($activitatsUser->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsUser->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $activitatsUser->hasValue('user') ? $this->Html->link($activitatsUser->user->email, ['controller' => 'Users', 'action' => 'view', $activitatsUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsUser->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>