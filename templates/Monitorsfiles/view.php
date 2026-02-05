<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monitorsfile $monitorsfile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Monitorsfile'), ['action' => 'edit', $monitorsfile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Monitorsfile'), ['action' => 'delete', $monitorsfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monitorsfile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Monitorsfiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Monitorsfile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="monitorsfiles view content">
            <h3><?= h($monitorsfile->file) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $monitorsfile->hasValue('user') ? $this->Html->link($monitorsfile->user->email, ['controller' => 'Users', 'action' => 'view', $monitorsfile->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Monitor') ?></th>
                    <td><?= $monitorsfile->hasValue('monitor') ? $this->Html->link($monitorsfile->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $monitorsfile->monitor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($monitorsfile->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Dir') ?></th>
                    <td><?= h($monitorsfile->file_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($monitorsfile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($monitorsfile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($monitorsfile->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Todos Monit') ?></th>
                    <td><?= $monitorsfile->todos_monit ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>