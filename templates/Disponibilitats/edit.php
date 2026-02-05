<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Disponibilitat $disponibilitat
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 * @var string[]|\Cake\Collection\CollectionInterface $dias
 * @var string[]|\Cake\Collection\CollectionInterface $horas
 * @var string[]|\Cake\Collection\CollectionInterface $tiponodisponibilitats
 * @var string[]|\Cake\Collection\CollectionInterface $activitatsgrups
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $disponibilitat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $disponibilitat->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Disponibilitats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="disponibilitats form content">
            <?= $this->Form->create($disponibilitat) ?>
            <fieldset>
                <legend><?= __('Edit Disponibilitat') ?></legend>
                <?php
                    echo $this->Form->control('monitor_id', ['options' => $monitors]);
                    echo $this->Form->control('dia_id', ['options' => $dias]);
                    echo $this->Form->control('hora_id', ['options' => $horas]);
                    echo $this->Form->control('tiponodisponibilitat_id', ['options' => $tiponodisponibilitats, 'empty' => true]);
                    echo $this->Form->control('activitatsgrup_id', ['options' => $activitatsgrups, 'empty' => true]);
                    echo $this->Form->control('disponible');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
