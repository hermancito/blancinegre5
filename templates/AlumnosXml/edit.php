<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AlumnosXml $alumnosXml
 * @var string[]|\Cake\Collection\CollectionInterface $colegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $alumnosXml->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $alumnosXml->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Alumnos Xml'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="alumnosXml form content">
            <?= $this->Form->create($alumnosXml) ?>
            <fieldset>
                <legend><?= __('Edit Alumnos Xml') ?></legend>
                <?php
                    echo $this->Form->control('colegio_id', ['options' => $colegios]);
                    echo $this->Form->control('xmlfile');
                    echo $this->Form->control('xmlfile_dir');
                    echo $this->Form->control('grabado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
