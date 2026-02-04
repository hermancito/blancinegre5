<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablaspreciosvble $tablaspreciosvble
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tablaspreciosvble->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tablaspreciosvble->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Tablaspreciosvbles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tablaspreciosvbles form content">
            <?= $this->Form->create($tablaspreciosvble) ?>
            <fieldset>
                <legend><?= __('Edit Tablaspreciosvble') ?></legend>
                <?php
                    echo $this->Form->control('nombre_tabla');
                    echo $this->Form->control('hora1');
                    echo $this->Form->control('hora1_media');
                    echo $this->Form->control('hora2');
                    echo $this->Form->control('hora2_media');
                    echo $this->Form->control('hora3');
                    echo $this->Form->control('hora3_media');
                    echo $this->Form->control('hora4');
                    echo $this->Form->control('hora4_media');
                    echo $this->Form->control('hora5');
                    echo $this->Form->control('hora5_media');
                    echo $this->Form->control('hora6');
                    echo $this->Form->control('hora6_media');
                    echo $this->Form->control('hora7');
                    echo $this->Form->control('hora7_media');
                    echo $this->Form->control('hora8');
                    echo $this->Form->control('hora8_media');
                    echo $this->Form->control('hora9');
                    echo $this->Form->control('hora9_media');
                    echo $this->Form->control('hora10');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
