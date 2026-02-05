<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsgrupsJornadasgrup $activitatsgrupsJornadasgrup
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 * @var string[]|\Cake\Collection\CollectionInterface $jornadasgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsgrupsJornadasgrup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsJornadasgrup->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitatsgrups Jornadasgrups'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsgrupsJornadasgrups form content">
            <?= $this->Form->create($activitatsgrupsJornadasgrup) ?>
            <fieldset>
                <legend><?= __('Edit Activitatsgrups Jornadasgrup') ?></legend>
                <?php
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups]);
                    echo $this->Form->control('jornadasgrup_id', ['options' => $jornadasgrups]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
