<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsJornadasgrup $activitatsgrupsJornadasgrup
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsgrups
 * @var \Cake\Collection\CollectionInterface|string[] $jornadasgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitatsgrups Jornadasgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsJornadasgrups form content">
            <?= $this->Form->create($activitatsgrupsJornadasgrup) ?>
            <fieldset>
                <legend><?= __('Add Activitatsgrups Jornadasgrup') ?></legend>
                <?php
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups]);
                    echo $this->Form->control('jornadasgrup_id', ['options' => $jornadasgrups]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
