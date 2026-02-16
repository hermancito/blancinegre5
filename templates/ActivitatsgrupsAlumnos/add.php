<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsAlumno $activitatsgrupsAlumno
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsgrups
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitatsgrups Alumnos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsAlumnos form content">
            <?= $this->Form->create($activitatsgrupsAlumno) ?>
            <fieldset>
                <legend><?= __('Add Activitatsgrups Alumno') ?></legend>
                <?php
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups]);
                    echo $this->Form->control('alumno_id', ['options' => $alumnos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
