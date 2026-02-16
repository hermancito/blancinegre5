<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personalcontrol $personalcontrol
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $tipoincidencias
 * @var \Cake\Collection\CollectionInterface|string[] $actors
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Personalcontrols'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="personalcontrols form content">
            <?= $this->Form->create($personalcontrol) ?>
            <fieldset>
                <legend><?= __('Add Personalcontrol') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('tipoincidencia_id', ['options' => $tipoincidencias]);
                    echo $this->Form->control('actor_id', ['options' => $actors]);
                    echo $this->Form->control('colegio_id', ['options' => $colegios, 'empty' => true]);
                    echo $this->Form->control('descripc');
                    echo $this->Form->control('comodin1');
                    echo $this->Form->control('comodin2');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
