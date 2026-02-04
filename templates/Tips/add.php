<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tip $tip
 * @var \Cake\Collection\CollectionInterface|string[] $ofertas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tips form content">
            <?= $this->Form->create($tip) ?>
            <fieldset>
                <legend><?= __('Add Tip') ?></legend>
                <?php
                    echo $this->Form->control('texto_tip');
                    echo $this->Form->control('ofertas._ids', ['options' => $ofertas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
