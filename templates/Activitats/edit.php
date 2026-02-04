<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activitat $activitat
 * @var string[]|\Cake\Collection\CollectionInterface $alumnos
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 * @var string[]|\Cake\Collection\CollectionInterface $dias
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 * @var string[]|\Cake\Collection\CollectionInterface $registroaltas
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitat->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitats form content">
            <?= $this->Form->create($activitat) ?>
            <fieldset>
                <legend><?= __('Edit Activitat') ?></legend>
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
