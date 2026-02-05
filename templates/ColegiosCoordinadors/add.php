<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ColegiosCoordinador $colegiosCoordinador
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $coordinadors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Colegios Coordinadors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiosCoordinadors form content">
            <?= $this->Form->create($colegiosCoordinador) ?>
            <fieldset>
                <legend><?= __('Add Colegios Coordinador') ?></legend>
                <?php
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                    echo $this->Form->control('coordinador_id', ['options' => $coordinadors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
