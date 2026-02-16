<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NotasUser $notasUser
 * @var string[]|\Cake\Collection\CollectionInterface $notas
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notasUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notasUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Notas Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notasUsers form content">
            <?= $this->Form->create($notasUser) ?>
            <fieldset>
                <legend><?= __('Edit Notas User') ?></legend>
                <?php
                    echo $this->Form->control('nota_id', ['options' => $notas]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
