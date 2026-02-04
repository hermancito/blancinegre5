<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresasdo $empresasdo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Empresasdos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresasdos form content">
            <?= $this->Form->create($empresasdo) ?>
            <fieldset>
                <legend><?= __('Add Empresasdo') ?></legend>
                <?php
                    echo $this->Form->control('nom_empresa');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
