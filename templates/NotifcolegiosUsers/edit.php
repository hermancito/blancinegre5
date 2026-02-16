<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NotifcolegiosUser $notifcolegiosUser
 * @var string[]|\Cake\Collection\CollectionInterface $notifcolegios
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notifcolegiosUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notifcolegiosUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Notifcolegios Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notifcolegiosUsers form content">
            <?= $this->Form->create($notifcolegiosUser) ?>
            <fieldset>
                <legend><?= __('Edit Notifcolegios User') ?></legend>
                <?php
                    echo $this->Form->control('notifcolegio_id', ['options' => $notifcolegios]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
