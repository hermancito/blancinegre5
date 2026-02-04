<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Destino $destino
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Destinos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="destinos form content">
            <?= $this->Form->create($destino) ?>
            <fieldset>
                <legend><?= __('Add Destino') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
