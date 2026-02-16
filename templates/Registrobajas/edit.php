<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registrobaja $registrobaja
 * @var string[]|\Cake\Collection\CollectionInterface $alumnos
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $registrobaja->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $registrobaja->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Registrobajas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="registrobajas form content">
            <?= $this->Form->create($registrobaja) ?>
            <fieldset>
                <legend><?= __('Edit Registrobaja') ?></legend>
                <?php
                    echo $this->Form->control('alumno_id', ['options' => $alumnos]);
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups]);
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                    echo $this->Form->control('fecha_baja');
                    echo $this->Form->control('motivo');
                    echo $this->Form->control('observ');
                    echo $this->Form->control('ejecutada');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
