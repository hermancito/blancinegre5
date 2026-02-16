<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registroalta $registroalta
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Registroaltas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="registroaltas form content">
            <?= $this->Form->create($registroalta) ?>
            <fieldset>
                <legend><?= __('Add Registroalta') ?></legend>
                <?php
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                    echo $this->Form->control('alumno_id', ['options' => $alumnos]);
                    echo $this->Form->control('importe');
                    echo $this->Form->control('concepto');
                    echo $this->Form->control('alta_amplia');
                    echo $this->Form->control('material');
                    echo $this->Form->control('observ');
                    echo $this->Form->control('fecha_alta');
                    echo $this->Form->control('activitats._ids', ['options' => $activitats]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
