<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsRegistroalta $activitatsRegistroalta
 * @var \Cake\Collection\CollectionInterface|string[] $registroaltas
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitats Registroaltas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsRegistroaltas form content">
            <?= $this->Form->create($activitatsRegistroalta) ?>
            <fieldset>
                <legend><?= __('Add Activitats Registroalta') ?></legend>
                <?php
                    echo $this->Form->control('registroalta_id', ['options' => $registroaltas]);
                    echo $this->Form->control('activitat_id', ['options' => $activitats]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
