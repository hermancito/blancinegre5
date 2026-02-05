<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ColegiosCoordinador $colegiosCoordinador
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 * @var string[]|\Cake\Collection\CollectionInterface $coordinadors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $colegiosCoordinador->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $colegiosCoordinador->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Colegios Coordinadors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiosCoordinadors form content">
            <?= $this->Form->create($colegiosCoordinador) ?>
            <fieldset>
                <legend><?= __('Edit Colegios Coordinador') ?></legend>
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
