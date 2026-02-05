<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsDia $activitatsDia
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 * @var \Cake\Collection\CollectionInterface|string[] $dias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitats Dias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsDias form content">
            <?= $this->Form->create($activitatsDia) ?>
            <fieldset>
                <legend><?= __('Add Activitats Dia') ?></legend>
                <?php
                    echo $this->Form->control('activitat_id', ['options' => $activitats]);
                    echo $this->Form->control('dia_id', ['options' => $dias]);
                    echo $this->Form->control('hora_ini', ['empty' => true]);
                    echo $this->Form->control('hora_fin', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
