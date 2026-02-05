<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinadorsfile $coordinadorsfile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Coordinadorsfile'), ['action' => 'edit', $coordinadorsfile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Coordinadorsfile'), ['action' => 'delete', $coordinadorsfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinadorsfile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coordinadorsfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Coordinadorsfile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="coordinadorsfiles view content">
            <h3><?= h($coordinadorsfile->file) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $coordinadorsfile->hasValue('user') ? $this->Html->link($coordinadorsfile->user->email, ['controller' => 'Users', 'action' => 'view', $coordinadorsfile->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Coordinador') ?></th>
                    <td><?= $coordinadorsfile->hasValue('coordinador') ? $this->Html->link($coordinadorsfile->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $coordinadorsfile->coordinador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($coordinadorsfile->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Dir') ?></th>
                    <td><?= h($coordinadorsfile->file_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($coordinadorsfile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coordinadorsfile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coordinadorsfile->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>