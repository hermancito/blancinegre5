<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsMonitor $activitatsMonitor
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsMonitor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsMonitor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitats Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsMonitors form content">
            <?= $this->Form->create($activitatsMonitor) ?>
            <fieldset>
                <legend><?= __('Edit Activitats Monitor') ?></legend>
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
