<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsMonitorsActivitatsgrup $activitatsMonitorsActivitatsgrup
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsMonitors
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsMonitorsActivitatsgrup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsMonitorsActivitatsgrup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitats Monitors Activitatsgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsMonitorsActivitatsgrups form content">
            <?= $this->Form->create($activitatsMonitorsActivitatsgrup) ?>
            <fieldset>
                <legend><?= __('Edit Activitats Monitors Activitatsgrup') ?></legend>
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
