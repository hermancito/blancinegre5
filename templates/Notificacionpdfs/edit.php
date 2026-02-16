<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificacionpdf $notificacionpdf
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $notificacions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $notificacionpdf->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $notificacionpdf->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Notificacionpdfs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notificacionpdfs form content">
            <?= $this->Form->create($notificacionpdf) ?>
            <fieldset>
                <legend><?= __('Edit Notificacionpdf') ?></legend>
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
