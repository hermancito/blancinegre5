<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsAlumno $activitatsAlumno
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitats Alumnos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsAlumnos form content">
            <?= $this->Form->create($activitatsAlumno) ?>
            <fieldset>
                <legend><?= __('Add Activitats Alumno') ?></legend>
                <?php
                    echo $this->Form->control('activitat_id', ['options' => $activitats]);
                    echo $this->Form->control('alumno_id', ['options' => $alumnos, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
