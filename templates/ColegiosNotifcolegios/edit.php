<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ColegiosNotifcolegio $colegiosNotifcolegio
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 * @var string[]|\Cake\Collection\CollectionInterface $notifcolegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $colegiosNotifcolegio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $colegiosNotifcolegio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Colegios Notifcolegios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiosNotifcolegios form content">
            <?= $this->Form->create($colegiosNotifcolegio) ?>
            <fieldset>
                <legend><?= __('Edit Colegios Notifcolegio') ?></legend>
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
