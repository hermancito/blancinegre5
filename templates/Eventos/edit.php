<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Eventos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="eventos form content">
            <?= $this->Form->create($evento) ?>
            <fieldset>
                <legend><?= __('Edit Evento') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('dia');
                    echo $this->Form->control('hora_ini', ['empty' => true]);
                    echo $this->Form->control('hora_fin', ['empty' => true]);
                    echo $this->Form->control('destino');
                    echo $this->Form->control('observ');
                    echo $this->Form->control('retribucion');
                    echo $this->Form->control('comodin1');
                    echo $this->Form->control('comodin2');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
