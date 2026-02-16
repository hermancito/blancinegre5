<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OfertasOfertaspreciosact $ofertasOfertaspreciosact
 * @var \Cake\Collection\CollectionInterface|string[] $ofertaspreciosacts
 * @var \Cake\Collection\CollectionInterface|string[] $ofertas
 * @var \Cake\Collection\CollectionInterface|string[] $ofertashorarios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ofertas Ofertaspreciosacts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertasOfertaspreciosacts form content">
            <?= $this->Form->create($ofertasOfertaspreciosact) ?>
            <fieldset>
                <legend><?= __('Add Ofertas Ofertaspreciosact') ?></legend>
                <?php
                    echo $this->Form->control('ofertaspreciosact_id', ['options' => $ofertaspreciosacts]);
                    echo $this->Form->control('oferta_id', ['options' => $ofertas]);
                    echo $this->Form->control('ofertashorario_id', ['options' => $ofertashorarios, 'empty' => true]);
                    echo $this->Form->control('horario');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
