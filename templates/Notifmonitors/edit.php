<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notifmonitor $notifmonitor
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notifmonitor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notifmonitor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Notifmonitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notifmonitors form content">
            <?= $this->Form->create($notifmonitor) ?>
            <fieldset>
                <legend><?= __('Edit Notifmonitor') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripc');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('photo_dir');
                    echo $this->Form->control('validado');
                    echo $this->Form->control('comodin');
                    echo $this->Form->control('tipo_monitor');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
