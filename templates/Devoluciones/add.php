<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Devolucione $devolucione
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Devoluciones'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="devoluciones form content">
            <?= $this->Form->create($devolucione) ?>
            <fieldset>
                <legend><?= __('Add Devolucione') ?></legend>
                <?php
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                    echo $this->Form->control('alumno_id', ['options' => $alumnos]);
                    echo $this->Form->control('importe');
                    echo $this->Form->control('concepto');
                    echo $this->Form->control('actividad');
                    echo $this->Form->control('observ');
                    echo $this->Form->control('fecha_dev');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
