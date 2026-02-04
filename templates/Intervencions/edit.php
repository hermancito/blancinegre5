<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Intervencion $intervencion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $intervencion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $intervencion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Intervencions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="intervencions form content">
            <?= $this->Form->create($intervencion) ?>
            <fieldset>
                <legend><?= __('Edit Intervencion') ?></legend>
                <?php
                    echo $this->Form->control('tipo_interv');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
