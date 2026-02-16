<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NotificacionsUser $notificacionsUser
 * @var \Cake\Collection\CollectionInterface|string[] $notificacions
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Notificacions Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notificacionsUsers form content">
            <?= $this->Form->create($notificacionsUser) ?>
            <fieldset>
                <legend><?= __('Add Notificacions User') ?></legend>
                <?php
                    echo $this->Form->control('notificacion_id', ['options' => $notificacions]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
