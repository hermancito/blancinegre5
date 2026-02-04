<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sustitucion $sustitucion
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sustitucion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sustitucion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sustitucions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="sustitucions form content">
            <?= $this->Form->create($sustitucion) ?>
            <fieldset>
                <legend><?= __('Edit Sustitucion') ?></legend>
                <?php
                    echo $this->Form->control('fecha');
                    echo $this->Form->control('hora_ini');
                    echo $this->Form->control('hora_fin');
                    echo $this->Form->control('monitor_id', ['options' => $monitors, 'empty' => true]);
                    echo $this->Form->control('colegio_id', ['options' => $colegios, 'empty' => true]);
                    echo $this->Form->control('activitat_id', ['options' => $activitats, 'empty' => true]);
                    echo $this->Form->control('coste');
                    echo $this->Form->control('justificada');
                    echo $this->Form->control('motivo');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('salario');
                    echo $this->Form->control('comodin1');
                    echo $this->Form->control('comodin2');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
