<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comercialsarxius $comercialsarxius
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Comercialsarxius'), ['action' => 'edit', $comercialsarxius->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Comercialsarxius'), ['action' => 'delete', $comercialsarxius->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comercialsarxius->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Comercialsarxius'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Comercialsarxius'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="comercialsarxius view content">
            <h3><?= h($comercialsarxius->pdf) ?></h3>
            <table>
                <tr>
                    <th><?= __('Comercial') ?></th>
                    <td><?= $comercialsarxius->hasValue('comercial') ? $this->Html->link($comercialsarxius->comercial->codigo, ['controller' => 'Comercials', 'action' => 'view', $comercialsarxius->comercial->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pdf') ?></th>
                    <td><?= h($comercialsarxius->pdf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pdf Dir') ?></th>
                    <td><?= h($comercialsarxius->pdf_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($comercialsarxius->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($comercialsarxius->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($comercialsarxius->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>