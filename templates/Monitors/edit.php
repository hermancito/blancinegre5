<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitor $monitor
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 * @var string[]|\Cake\Collection\CollectionInterface $coordinadors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $monitor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $monitor->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Monitors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="monitors form content">
            <?= $this->Form->create($monitor) ?>
            <fieldset>
                <legend><?= __('Edit Monitor') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('username');
                    echo $this->Form->control('email');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('poblacion');
                    echo $this->Form->control('tfno1');
                    echo $this->Form->control('tfno2');
                    echo $this->Form->control('nif');
                    echo $this->Form->control('validado');
                    echo $this->Form->control('bolsa');
                    echo $this->Form->control('activitats._ids', ['options' => $activitats]);
                    echo $this->Form->control('activitatsgrups._ids', ['options' => $activitatsgrups]);
                    echo $this->Form->control('colegios._ids', ['options' => $colegios]);
                    echo $this->Form->control('coordinadors._ids', ['options' => $coordinadors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
