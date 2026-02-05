<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CoordinadorsMonitor $coordinadorsMonitor
 * @var string[]|\Cake\Collection\CollectionInterface $coordinadors
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coordinadorsMonitor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coordinadorsMonitor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Coordinadors Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="coordinadorsMonitors form content">
            <?= $this->Form->create($coordinadorsMonitor) ?>
            <fieldset>
                <legend><?= __('Edit Coordinadors Monitor') ?></legend>
                <?php
                    echo $this->Form->control('coordinador_id', ['options' => $coordinadors]);
                    echo $this->Form->control('monitor_id', ['options' => $monitors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
