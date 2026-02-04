<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jornadasgrup $jornadasgrup
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jornadasgrup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jornadasgrup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Jornadasgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="jornadasgrups form content">
            <?= $this->Form->create($jornadasgrup) ?>
            <fieldset>
                <legend><?= __('Edit Jornadasgrup') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('anyo');
                    echo $this->Form->control('variac_ini');
                    echo $this->Form->control('variac_fin');
                    echo $this->Form->control('activitatsgrups._ids', ['options' => $activitatsgrups]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
