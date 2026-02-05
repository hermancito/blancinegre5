<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Asistencia $asistencia
 * @var string[]|\Cake\Collection\CollectionInterface $alumnos
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $asistencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $asistencia->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Asistencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="asistencias form content">
            <?= $this->Form->create($asistencia) ?>
            <fieldset>
                <legend><?= __('Edit Asistencia') ?></legend>
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
