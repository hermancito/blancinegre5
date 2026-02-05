<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volante $volante
 * @var \Cake\Collection\CollectionInterface|string[] $monitors
 * @var \Cake\Collection\CollectionInterface|string[] $dias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Volantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="volantes form content">
            <?= $this->Form->create($volante) ?>
            <fieldset>
                <legend><?= __('Add Volante') ?></legend>
                <?php
                    echo $this->Form->control('monitor_id', ['options' => $monitors]);
                    echo $this->Form->control('observ');
                    echo $this->Form->control('dias._ids', ['options' => $dias]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
