<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsColegio $activitatsColegio
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $activitatsColegio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsColegio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Activitats Colegios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsColegios form content">
            <?= $this->Form->create($activitatsColegio) ?>
            <fieldset>
                <legend><?= __('Edit Activitats Colegio') ?></legend>
                <?php
                    echo $this->Form->control('activitat_id', ['options' => $activitats]);
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
