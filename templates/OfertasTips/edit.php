<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OfertasTip $ofertasTip
 * @var string[]|\Cake\Collection\CollectionInterface $ofertas
 * @var string[]|\Cake\Collection\CollectionInterface $tips
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ofertasTip->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ofertasTip->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ofertas Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertasTips form content">
            <?= $this->Form->create($ofertasTip) ?>
            <fieldset>
                <legend><?= __('Edit Ofertas Tip') ?></legend>
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
