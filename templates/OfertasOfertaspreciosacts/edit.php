<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OfertasOfertaspreciosact $ofertasOfertaspreciosact
 * @var string[]|\Cake\Collection\CollectionInterface $ofertaspreciosacts
 * @var string[]|\Cake\Collection\CollectionInterface $ofertas
 * @var string[]|\Cake\Collection\CollectionInterface $ofertashorarios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ofertasOfertaspreciosact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ofertasOfertaspreciosact->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ofertas Ofertaspreciosacts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertasOfertaspreciosacts form content">
            <?= $this->Form->create($ofertasOfertaspreciosact) ?>
            <fieldset>
                <legend><?= __('Edit Ofertas Ofertaspreciosact') ?></legend>
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
