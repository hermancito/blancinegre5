<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asistencia $asistencia
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Asistencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="asistencias form content">
            <?= $this->Form->create($asistencia) ?>
            <fieldset>
                <legend><?= __('Add Asistencia') ?></legend>
                <?php
                    echo $this->Form->control('alumno_id', ['options' => $alumnos]);
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
