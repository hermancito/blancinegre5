<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresasdo $empresasdo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Empresasdo'), ['action' => 'edit', $empresasdo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Empresasdo'), ['action' => 'delete', $empresasdo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresasdo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Empresasdos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Empresasdo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="empresasdos view content">
            <h3><?= h($empresasdo->nom_empresa) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Empresa') ?></th>
                    <td><?= h($empresasdo->nom_empresa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($empresasdo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($empresasdo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($empresasdo->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>