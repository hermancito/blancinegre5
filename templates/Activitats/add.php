<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activitat $activitat
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $dias
 * @var \Cake\Collection\CollectionInterface|string[] $monitors
 * @var \Cake\Collection\CollectionInterface|string[] $registroaltas
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitats form content">
            <?= $this->Form->create($activitat) ?>
            <fieldset>
                <legend><?= __('Add Activitat') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('alumnos._ids', ['options' => $alumnos]);
                    echo $this->Form->control('colegios._ids', ['options' => $colegios]);
                    echo $this->Form->control('dias._ids', ['options' => $dias]);
                    echo $this->Form->control('monitors._ids', ['options' => $monitors]);
                    echo $this->Form->control('registroaltas._ids', ['options' => $registroaltas]);
                    echo $this->Form->control('users._ids', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
