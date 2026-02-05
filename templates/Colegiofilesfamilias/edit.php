<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colegiofilesfamilia $colegiofilesfamilia
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
                ['action' => 'delete', $colegiofilesfamilia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $colegiofilesfamilia->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Colegiofilesfamilias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiofilesfamilias form content">
            <?= $this->Form->create($colegiofilesfamilia) ?>
            <fieldset>
                <legend><?= __('Edit Colegiofilesfamilia') ?></legend>
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
