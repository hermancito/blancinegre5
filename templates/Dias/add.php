<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dia $dia
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsgrups
 * @var \Cake\Collection\CollectionInterface|string[] $volantes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Dias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dias form content">
            <?= $this->Form->create($dia) ?>
            <fieldset>
                <legend><?= __('Add Dia') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripc');
                    echo $this->Form->control('activitats._ids', ['options' => $activitats]);
                    echo $this->Form->control('activitatsgrups._ids', ['options' => $activitatsgrups]);
                    echo $this->Form->control('volantes._ids', ['options' => $volantes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
