<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NotasUser $notasUser
 * @var \Cake\Collection\CollectionInterface|string[] $notas
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Notas Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notasUsers form content">
            <?= $this->Form->create($notasUser) ?>
            <fieldset>
                <legend><?= __('Add Notas User') ?></legend>
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
