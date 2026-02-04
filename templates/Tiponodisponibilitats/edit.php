<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiponodisponibilitat $tiponodisponibilitat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiponodisponibilitat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiponodisponibilitat->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tiponodisponibilitats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tiponodisponibilitats form content">
            <?= $this->Form->create($tiponodisponibilitat) ?>
            <fieldset>
                <legend><?= __('Edit Tiponodisponibilitat') ?></legend>
                <?php
                    echo $this->Form->control('descripc');
                    echo $this->Form->control('color');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
