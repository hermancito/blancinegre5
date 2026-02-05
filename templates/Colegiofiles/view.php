<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colegiofile $colegiofile
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Colegiofile'), ['action' => 'edit', $colegiofile->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Colegiofile'), ['action' => 'delete', $colegiofile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colegiofile->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colegiofiles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Colegiofile'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiofiles view content">
            <h3><?= h($colegiofile->file) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $colegiofile->hasValue('user') ? $this->Html->link($colegiofile->user->email, ['controller' => 'Users', 'action' => 'view', $colegiofile->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $colegiofile->hasValue('colegio') ? $this->Html->link($colegiofile->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiofile->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($colegiofile->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Dir') ?></th>
                    <td><?= h($colegiofile->file_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($colegiofile->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($colegiofile->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($colegiofile->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>