<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ofertaspreciosact $ofertaspreciosact
 * @var \Cake\Collection\CollectionInterface|string[] $ofertas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ofertaspreciosacts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertaspreciosacts form content">
            <?= $this->Form->create($ofertaspreciosact) ?>
            <fieldset>
                <legend><?= __('Add Ofertaspreciosact') ?></legend>
                <?php
                    echo $this->Form->control('nom_activitat');
                    echo $this->Form->control('grupo');
                    echo $this->Form->control('start');
                    echo $this->Form->control('basic');
                    echo $this->Form->control('advance');
                    echo $this->Form->control('premium');
                    echo $this->Form->control('premium_plus');
                    echo $this->Form->control('ratio');
                    echo $this->Form->control('material_observ');
                    echo $this->Form->control('accion_horario');
                    echo $this->Form->control('accion_ubicacion');
                    echo $this->Form->control('ofertas._ids', ['options' => $ofertas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
