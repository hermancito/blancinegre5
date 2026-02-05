<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DestinosUser $destinosUser
 * @var \Cake\Collection\CollectionInterface|string[] $destinos
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Destinos Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="destinosUsers form content">
            <?= $this->Form->create($destinosUser) ?>
            <fieldset>
                <legend><?= __('Add Destinos User') ?></legend>
                <?php
                    echo $this->Form->control('destino_id', ['options' => $destinos]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
