<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinador $coordinador
 * @var \Cake\Collection\CollectionInterface|string[] $alumnos
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $monitors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Coordinadors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="coordinadors form content">
            <?= $this->Form->create($coordinador) ?>
            <fieldset>
                <legend><?= __('Add Coordinador') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('username');
                    echo $this->Form->control('email');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('tfno1');
                    echo $this->Form->control('tfno2');
                    echo $this->Form->control('nif');
                    echo $this->Form->control('validado');
                    echo $this->Form->control('alumnos._ids', ['options' => $alumnos]);
                    echo $this->Form->control('colegios._ids', ['options' => $colegios]);
                    echo $this->Form->control('monitors._ids', ['options' => $monitors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
