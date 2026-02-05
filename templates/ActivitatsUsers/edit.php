<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsUser $activitatsUser
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitats Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsUsers form content">
            <?= $this->Form->create($activitatsUser) ?>
            <fieldset>
                <legend><?= __('Edit Activitats User') ?></legend>
                <?php
                    echo $this->Form->control('activitat_id', ['options' => $activitats]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
