<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificacion $notificacion
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notificacion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notificacion->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Notificacions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notificacions form content">
            <?= $this->Form->create($notificacion) ?>
            <fieldset>
                <legend><?= __('Edit Notificacion') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('activitat_id', ['options' => $activitats, 'empty' => true]);
                    echo $this->Form->control('colegio_id', ['options' => $colegios, 'empty' => true]);
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('descripc');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('photo_dir');
                    echo $this->Form->control('validado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
