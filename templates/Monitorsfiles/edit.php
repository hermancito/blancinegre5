<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitorsfile $monitorsfile
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $monitorsfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $monitorsfile->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Monitorsfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="monitorsfiles form content">
            <?= $this->Form->create($monitorsfile) ?>
            <fieldset>
                <legend><?= __('Edit Monitorsfile') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('monitor_id', ['options' => $monitors]);
                    echo $this->Form->control('file');
                    echo $this->Form->control('file_dir');
                    echo $this->Form->control('todos_monit');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
