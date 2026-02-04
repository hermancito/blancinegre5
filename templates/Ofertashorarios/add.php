<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ofertashorario $ofertashorario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ofertashorarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertashorarios form content">
            <?= $this->Form->create($ofertashorario) ?>
            <fieldset>
                <legend><?= __('Add Ofertashorario') ?></legend>
                <?php
                    echo $this->Form->control('intervalo');
                    echo $this->Form->control('accion');
                    echo $this->Form->control('importe');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
