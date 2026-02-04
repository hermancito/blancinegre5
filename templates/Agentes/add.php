<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agente $agente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Agentes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agentes form content">
            <?= $this->Form->create($agente) ?>
            <fieldset>
                <legend><?= __('Add Agente') ?></legend>
                <?php
                    echo $this->Form->control('nom_agente');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
