<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinadorsfile $coordinadorsfile
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $coordinadors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Coordinadorsfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="coordinadorsfiles form content">
            <?= $this->Form->create($coordinadorsfile) ?>
            <fieldset>
                <legend><?= __('Add Coordinadorsfile') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('coordinador_id', ['options' => $coordinadors]);
                    echo $this->Form->control('file');
                    echo $this->Form->control('file_dir');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
