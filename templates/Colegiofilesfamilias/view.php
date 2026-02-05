<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colegiofilesfamilia $colegiofilesfamilia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Colegiofilesfamilia'), ['action' => 'edit', $colegiofilesfamilia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Colegiofilesfamilia'), ['action' => 'delete', $colegiofilesfamilia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colegiofilesfamilia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colegiofilesfamilias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Colegiofilesfamilia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegiofilesfamilias view content">
            <h3><?= h($colegiofilesfamilia->file) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $colegiofilesfamilia->hasValue('user') ? $this->Html->link($colegiofilesfamilia->user->email, ['controller' => 'Users', 'action' => 'view', $colegiofilesfamilia->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $colegiofilesfamilia->hasValue('colegio') ? $this->Html->link($colegiofilesfamilia->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiofilesfamilia->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($colegiofilesfamilia->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('File Dir') ?></th>
                    <td><?= h($colegiofilesfamilia->file_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($colegiofilesfamilia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($colegiofilesfamilia->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($colegiofilesfamilia->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>