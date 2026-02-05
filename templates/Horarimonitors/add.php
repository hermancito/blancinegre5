<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horarimonitor $horarimonitor
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Horarimonitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="horarimonitors form content">
            <?= $this->Form->create($horarimonitor) ?>
            <fieldset>
                <legend><?= __('Add Horarimonitor') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('hora');
                    echo $this->Form->control('inic_fin');
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('latitud');
                    echo $this->Form->control('longitud');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
