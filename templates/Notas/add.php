<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nota $nota
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Notas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notas form content">
            <?= $this->Form->create($nota) ?>
            <fieldset>
                <legend><?= __('Add Nota') ?></legend>
                <?php
                    echo $this->Form->control('alumno_id', ['options' => $alumnos]);
                    echo $this->Form->control('comodin');
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('activitat_id', ['options' => $activitats]);
                    echo $this->Form->control('cuatrim');
                    echo $this->Form->control('anyo');
                    echo $this->Form->control('curso');
                    echo $this->Form->control('objetivos');
                    echo $this->Form->control('contenidos');
                    echo $this->Form->control('atencion');
                    echo $this->Form->control('participa');
                    echo $this->Form->control('ejerc');
                    echo $this->Form->control('asist');
                    echo $this->Form->control('actitud');
                    echo $this->Form->control('respeto');
                    echo $this->Form->control('validado');
                    echo $this->Form->control('comentarios_boletin');
                    echo $this->Form->control('contenidos_boletin');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
