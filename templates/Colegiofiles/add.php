<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colegiofile $colegiofile
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Colegiofiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiofiles form content">
            <?= $this->Form->create($colegiofile) ?>
            <fieldset>
                <legend><?= __('Add Colegiofile') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                    echo $this->Form->control('file');
                    echo $this->Form->control('file_dir');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
