<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OfertasTip $ofertasTip
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ofertas Tip'), ['action' => 'edit', $ofertasTip->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ofertas Tip'), ['action' => 'delete', $ofertasTip->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ofertasTip->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ofertas Tips'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ofertas Tip'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertasTips view content">
            <h3><?= h($ofertasTip->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Oferta') ?></th>
                    <td><?= $ofertasTip->hasValue('oferta') ? $this->Html->link($ofertasTip->oferta->selecc_contrato, ['controller' => 'Ofertas', 'action' => 'view', $ofertasTip->oferta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tip') ?></th>
                    <td><?= $ofertasTip->hasValue('tip') ? $this->Html->link($ofertasTip->tip->id, ['controller' => 'Tips', 'action' => 'view', $ofertasTip->tip->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ofertasTip->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ofertasTip->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ofertasTip->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>