<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colegiofile $colegiofile
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $colegiofile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $colegiofile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Colegiofiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiofiles form content">
            <?= $this->Form->create($colegiofile) ?>
            <fieldset>
                <legend><?= __('Edit Colegiofile') ?></legend>
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
