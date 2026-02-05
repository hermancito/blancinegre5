<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsMonitor $activitatsMonitor
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 * @var \Cake\Collection\CollectionInterface|string[] $monitors
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitats Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsMonitors form content">
            <?= $this->Form->create($activitatsMonitor) ?>
            <fieldset>
                <legend><?= __('Add Activitats Monitor') ?></legend>
                <?php
                    echo $this->Form->control('activitat_id', ['options' => $activitats]);
                    echo $this->Form->control('monitor_id', ['options' => $monitors]);
                    echo $this->Form->control('activitatsgrups._ids', ['options' => $activitatsgrups]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
