<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsMonitorsActivitatsgrup $activitatsMonitorsActivitatsgrup
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsMonitors
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitats Monitors Activitatsgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsMonitorsActivitatsgrups form content">
            <?= $this->Form->create($activitatsMonitorsActivitatsgrup) ?>
            <fieldset>
                <legend><?= __('Add Activitats Monitors Activitatsgrup') ?></legend>
                <?php
                    echo $this->Form->control('activitats_monitor_id', ['options' => $activitatsMonitors]);
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
