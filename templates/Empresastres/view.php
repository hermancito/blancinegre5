<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresastre $empresastre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empresastre'), ['action' => 'edit', $empresastre->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empresastre'), ['action' => 'delete', $empresastre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresastre->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empresastres'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empresastre'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresastres view content">
            <h3><?= h($empresastre->nom_empresa) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Empresa') ?></th>
                    <td><?= h($empresastre->nom_empresa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($empresastre->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($empresastre->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($empresastre->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>