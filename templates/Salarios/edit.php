<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salario $salario
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $salario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $salario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Salarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="salarios form content">
            <?= $this->Form->create($salario) ?>
            <fieldset>
                <legend><?= __('Edit Salario') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('sala_fijo');
                    echo $this->Form->control('sala_vble');
                    echo $this->Form->control('plus_var');
                    echo $this->Form->control('complemento');
                    echo $this->Form->control('dietas');
                    echo $this->Form->control('eventos');
                    echo $this->Form->control('it');
                    echo $this->Form->control('absentismo');
                    echo $this->Form->control('dto');
                    echo $this->Form->control('nomina');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
