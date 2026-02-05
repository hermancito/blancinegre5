<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsMonitor $activitatsgrupsMonitor
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsgrupsMonitor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsMonitor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitatsgrups Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsMonitors form content">
            <?= $this->Form->create($activitatsgrupsMonitor) ?>
            <fieldset>
                <legend><?= __('Edit Activitatsgrups Monitor') ?></legend>
                <?php
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups]);
                    echo $this->Form->control('monitor_id', ['options' => $monitors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
