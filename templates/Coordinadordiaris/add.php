<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinadordiari $coordinadordiari
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $coordinadors
 * @var \Cake\Collection\CollectionInterface|string[] $intervencions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Coordinadordiaris'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="coordinadordiaris form content">
            <?= $this->Form->create($coordinadordiari) ?>
            <fieldset>
                <legend><?= __('Add Coordinadordiari') ?></legend>
                <?php
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                    echo $this->Form->control('coordinador_id', ['options' => $coordinadors]);
                    echo $this->Form->control('dia');
                    echo $this->Form->control('hora_ini', ['empty' => true]);
                    echo $this->Form->control('hora_fin', ['empty' => true]);
                    echo $this->Form->control('intervencion_id', ['options' => $intervencions]);
                    echo $this->Form->control('observ');
                    echo $this->Form->control('resuelta');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
