<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsRegistroalta $activitatsRegistroalta
 * @var string[]|\Cake\Collection\CollectionInterface $registroaltas
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsRegistroalta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsRegistroalta->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitats Registroaltas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsRegistroaltas form content">
            <?= $this->Form->create($activitatsRegistroalta) ?>
            <fieldset>
                <legend><?= __('Edit Activitats Registroalta') ?></legend>
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
