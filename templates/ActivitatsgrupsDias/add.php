<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsDia $activitatsgrupsDia
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsgrups
 * @var \Cake\Collection\CollectionInterface|string[] $dias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Activitatsgrups Dias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsDias form content">
            <?= $this->Form->create($activitatsgrupsDia) ?>
            <fieldset>
                <legend><?= __('Add Activitatsgrups Dia') ?></legend>
                <?php
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups]);
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
