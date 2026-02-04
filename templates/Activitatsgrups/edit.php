<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activitatsgrup $activitatsgrup
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsMonitors
 * @var string[]|\Cake\Collection\CollectionInterface $alumnos
 * @var string[]|\Cake\Collection\CollectionInterface $dias
 * @var string[]|\Cake\Collection\CollectionInterface $jornadasgrups
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsgrup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitatsgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrups form content">
            <?= $this->Form->create($activitatsgrup) ?>
            <fieldset>
                <legend><?= __('Edit Activitatsgrup') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('activitat_id', ['options' => $activitats]);
                    echo $this->Form->control('colegio_id', ['options' => $colegios, 'empty' => true]);
                    echo $this->Form->control('aula');
                    echo $this->Form->control('comentarios');
                    echo $this->Form->control('tipo_fijo');
                    echo $this->Form->control('tipo_vble');
                    echo $this->Form->control('sala_fijo');
                    echo $this->Form->control('sala_vble');
                    echo $this->Form->control('visible_familias');
                    echo $this->Form->control('descripc');
                    echo $this->Form->control('aplicar_jornada');
                    echo $this->Form->control('alum_min');
                    echo $this->Form->control('alum_max');
                    echo $this->Form->control('fecha_inicio', ['empty' => true]);
                    echo $this->Form->control('fecha_fin', ['empty' => true]);
                    echo $this->Form->control('matricula');
                    echo $this->Form->control('activitats_monitors._ids', ['options' => $activitatsMonitors]);
                    echo $this->Form->control('alumnos._ids', ['options' => $alumnos]);
                    echo $this->Form->control('dias._ids', ['options' => $dias]);
                    echo $this->Form->control('jornadasgrups._ids', ['options' => $jornadasgrups]);
                    echo $this->Form->control('monitors._ids', ['options' => $monitors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
