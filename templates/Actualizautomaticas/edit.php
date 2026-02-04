<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actualizautomatica $actualizautomatica
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $actualizautomatica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $actualizautomatica->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Actualizautomaticas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="actualizautomaticas form content">
            <?= $this->Form->create($actualizautomatica) ?>
            <fieldset>
                <legend><?= __('Edit Actualizautomatica') ?></legend>
                <?php
                    echo $this->Form->control('tipo');
                    echo $this->Form->control('anyo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
