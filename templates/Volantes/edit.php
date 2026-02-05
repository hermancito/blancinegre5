<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volante $volante
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 * @var string[]|\Cake\Collection\CollectionInterface $dias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $volante->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $volante->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Volantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="volantes form content">
            <?= $this->Form->create($volante) ?>
            <fieldset>
                <legend><?= __('Edit Volante') ?></legend>
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
