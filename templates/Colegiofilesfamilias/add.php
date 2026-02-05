<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colegiofilesfamilia $colegiofilesfamilia
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Colegiofilesfamilias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiofilesfamilias form content">
            <?= $this->Form->create($colegiofilesfamilia) ?>
            <fieldset>
                <legend><?= __('Add Colegiofilesfamilia') ?></legend>
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
