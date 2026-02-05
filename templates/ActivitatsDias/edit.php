<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsDia $activitatsDia
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $dias
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsDia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsDia->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitats Dias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsDias form content">
            <?= $this->Form->create($activitatsDia) ?>
            <fieldset>
                <legend><?= __('Edit Activitats Dia') ?></legend>
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
