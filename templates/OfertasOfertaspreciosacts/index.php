<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\OfertasOfertaspreciosact> $ofertasOfertaspreciosacts
 */
?>
<div class="ofertasOfertaspreciosacts index content">
    <?= $this->Html->link(__('New Ofertas Ofertaspreciosact'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ofertas Ofertaspreciosacts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ofertaspreciosact_id') ?></th>
                    <th><?= $this->Paginator->sort('oferta_id') ?></th>
                    <th><?= $this->Paginator->sort('ofertashorario_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('horario') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ofertasOfertaspreciosacts as $ofertasOfertaspreciosact): ?>
                <tr>
                    <td><?= $this->Number->format($ofertasOfertaspreciosact->id) ?></td>
                    <td><?= $ofertasOfertaspreciosact->hasValue('ofertaspreciosact') ? $this->Html->link($ofertasOfertaspreciosact->ofertaspreciosact->nom_activitat, ['controller' => 'Ofertaspreciosacts', 'action' => 'view', $ofertasOfertaspreciosact->ofertaspreciosact->id]) : '' ?></td>
                    <td><?= $ofertasOfertaspreciosact->hasValue('oferta') ? $this->Html->link($ofertasOfertaspreciosact->oferta->selecc_contrato, ['controller' => 'Ofertas', 'action' => 'view', $ofertasOfertaspreciosact->oferta->id]) : '' ?></td>
                    <td><?= $ofertasOfertaspreciosact->hasValue('ofertashorario') ? $this->Html->link($ofertasOfertaspreciosact->ofertashorario->intervalo, ['controller' => 'Ofertashorarios', 'action' => 'view', $ofertasOfertaspreciosact->ofertashorario->id]) : '' ?></td>
                    <td><?= h($ofertasOfertaspreciosact->created) ?></td>
                    <td><?= h($ofertasOfertaspreciosact->modified) ?></td>
                    <td><?= h($ofertasOfertaspreciosact->horario) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ofertasOfertaspreciosact->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ofertasOfertaspreciosact->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $ofertasOfertaspreciosact->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $ofertasOfertaspreciosact->id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>