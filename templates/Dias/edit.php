<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dia $dia
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 * @var string[]|\Cake\Collection\CollectionInterface $volantes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dia->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Dias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dias form content">
            <?= $this->Form->create($dia) ?>
            <fieldset>
                <legend><?= __('Edit Dia') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripc');
                    echo $this->Form->control('activitats._ids', ['options' => $activitats]);
                    echo $this->Form->control('activitatsgrups._ids', ['options' => $activitatsgrups]);
                    echo $this->Form->control('volantes._ids', ['options' => $volantes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
