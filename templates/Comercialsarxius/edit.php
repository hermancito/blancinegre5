<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comercialsarxius $comercialsarxius
 * @var string[]|\Cake\Collection\CollectionInterface $comercials
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comercialsarxius->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comercialsarxius->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Comercialsarxius'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="comercialsarxius form content">
            <?= $this->Form->create($comercialsarxius) ?>
            <fieldset>
                <legend><?= __('Edit Comercialsarxius') ?></legend>
                <?php
                    echo $this->Form->control('comercial_id', ['options' => $comercials]);
                    echo $this->Form->control('pdf');
                    echo $this->Form->control('pdf_dir');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
