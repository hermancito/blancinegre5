<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresastre $empresastre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $empresastre->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $empresastre->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Empresastres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresastres form content">
            <?= $this->Form->create($empresastre) ?>
            <fieldset>
                <legend><?= __('Edit Empresastre') ?></legend>
                <?php
                    echo $this->Form->control('nom_empresa');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
