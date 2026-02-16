<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OfertasOfertaspreciosact $ofertasOfertaspreciosact
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ofertas Ofertaspreciosact'), ['action' => 'edit', $ofertasOfertaspreciosact->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ofertas Ofertaspreciosact'), ['action' => 'delete', $ofertasOfertaspreciosact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ofertasOfertaspreciosact->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ofertas Ofertaspreciosacts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ofertas Ofertaspreciosact'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertasOfertaspreciosacts view content">
            <h3><?= h($ofertasOfertaspreciosact->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ofertaspreciosact') ?></th>
                    <td><?= $ofertasOfertaspreciosact->hasValue('ofertaspreciosact') ? $this->Html->link($ofertasOfertaspreciosact->ofertaspreciosact->nom_activitat, ['controller' => 'Ofertaspreciosacts', 'action' => 'view', $ofertasOfertaspreciosact->ofertaspreciosact->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Oferta') ?></th>
                    <td><?= $ofertasOfertaspreciosact->hasValue('oferta') ? $this->Html->link($ofertasOfertaspreciosact->oferta->selecc_contrato, ['controller' => 'Ofertas', 'action' => 'view', $ofertasOfertaspreciosact->oferta->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ofertashorario') ?></th>
                    <td><?= $ofertasOfertaspreciosact->hasValue('ofertashorario') ? $this->Html->link($ofertasOfertaspreciosact->ofertashorario->intervalo, ['controller' => 'Ofertashorarios', 'action' => 'view', $ofertasOfertaspreciosact->ofertashorario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Horario') ?></th>
                    <td><?= h($ofertasOfertaspreciosact->horario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ofertasOfertaspreciosact->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ofertasOfertaspreciosact->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ofertasOfertaspreciosact->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>