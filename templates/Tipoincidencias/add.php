<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tipoincidencia $tipoincidencia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Tipoincidencias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tipoincidencias form content">
            <?= $this->Form->create($tipoincidencia) ?>
            <fieldset>
                <legend><?= __('Add Tipoincidencia') ?></legend>
                <?php
                    echo $this->Form->control('descripc');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
