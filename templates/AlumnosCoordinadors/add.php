<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AlumnosCoordinador $alumnosCoordinador
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 * @var \Cake\Collection\CollectionInterface|string[] $coordinadors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Alumnos Coordinadors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="alumnosCoordinadors form content">
            <?= $this->Form->create($alumnosCoordinador) ?>
            <fieldset>
                <legend><?= __('Add Alumnos Coordinador') ?></legend>
                <?php
                    echo $this->Form->control('alumno_id', ['options' => $alumnos]);
                    echo $this->Form->control('coordinador_id', ['options' => $coordinadors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
