<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OfertasTip $ofertasTip
 * @var \Cake\Collection\CollectionInterface|string[] $ofertas
 * @var \Cake\Collection\CollectionInterface|string[] $tips
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ofertas Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertasTips form content">
            <?= $this->Form->create($ofertasTip) ?>
            <fieldset>
                <legend><?= __('Add Ofertas Tip') ?></legend>
                <?php
                    echo $this->Form->control('oferta_id', ['options' => $ofertas]);
                    echo $this->Form->control('tip_id', ['options' => $tips]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
