<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DestinosUser $destinosUser
 * @var string[]|\Cake\Collection\CollectionInterface $destinos
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $destinosUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $destinosUser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Destinos Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="destinosUsers form content">
            <?= $this->Form->create($destinosUser) ?>
            <fieldset>
                <legend><?= __('Edit Destinos User') ?></legend>
                <?php
                    echo $this->Form->control('destino_id', ['options' => $destinos]);
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
