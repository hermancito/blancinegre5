<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificacionpdf $notificacionpdf
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $notificacions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Notificacionpdfs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notificacionpdfs form content">
            <?= $this->Form->create($notificacionpdf) ?>
            <fieldset>
                <legend><?= __('Add Notificacionpdf') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('notificacion_id', ['options' => $notificacions]);
                    echo $this->Form->control('pdf');
                    echo $this->Form->control('pdf_dir');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
