<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Destino $destino
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $destino->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $destino->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Destinos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="destinos form content">
            <?= $this->Form->create($destino) ?>
            <fieldset>
                <legend><?= __('Edit Destino') ?></legend>
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
