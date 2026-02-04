<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ubicacion $ubicacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ubicacion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ubicacion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ubicacions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ubicacions form content">
            <?= $this->Form->create($ubicacion) ?>
            <fieldset>
                <legend><?= __('Edit Ubicacion') ?></legend>
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
