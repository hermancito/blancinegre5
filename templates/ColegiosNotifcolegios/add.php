<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ColegiosNotifcolegio $colegiosNotifcolegio
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $notifcolegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Colegios Notifcolegios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiosNotifcolegios form content">
            <?= $this->Form->create($colegiosNotifcolegio) ?>
            <fieldset>
                <legend><?= __('Add Colegios Notifcolegio') ?></legend>
                <?php
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                    echo $this->Form->control('notifcolegio_id', ['options' => $notifcolegios]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
