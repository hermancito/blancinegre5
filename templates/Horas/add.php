<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hora $hora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Horas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="horas form content">
            <?= $this->Form->create($hora) ?>
            <fieldset>
                <legend><?= __('Add Hora') ?></legend>
                <?php
                    echo $this->Form->control('hora');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
