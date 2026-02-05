<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiasVolante $diasVolante
 * @var \Cake\Collection\CollectionInterface|string[] $dias
 * @var \Cake\Collection\CollectionInterface|string[] $volantes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Dias Volantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="diasVolantes form content">
            <?= $this->Form->create($diasVolante) ?>
            <fieldset>
                <legend><?= __('Add Dias Volante') ?></legend>
                <?php
                    echo $this->Form->control('dia_id', ['options' => $dias]);
                    echo $this->Form->control('volante_id', ['options' => $volantes]);
                    echo $this->Form->control('hora_ini', ['empty' => true]);
                    echo $this->Form->control('hora_fin', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
