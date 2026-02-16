<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\OfertasTip> $ofertasTips
 */
?>
<div class="ofertasTips index content">
    <?= $this->Html->link(__('New Ofertas Tip'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ofertas Tips') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('oferta_id') ?></th>
                    <th><?= $this->Paginator->sort('tip_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ofertasTips as $ofertasTip): ?>
                <tr>
                    <td><?= $this->Number->format($ofertasTip->id) ?></td>
                    <td><?= $ofertasTip->hasValue('oferta') ? $this->Html->link($ofertasTip->oferta->selecc_contrato, ['controller' => 'Ofertas', 'action' => 'view', $ofertasTip->oferta->id]) : '' ?></td>
                    <td><?= $ofertasTip->hasValue('tip') ? $this->Html->link($ofertasTip->tip->id, ['controller' => 'Tips', 'action' => 'view', $ofertasTip->tip->id]) : '' ?></td>
                    <td><?= h($ofertasTip->created) ?></td>
                    <td><?= h($ofertasTip->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ofertasTip->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ofertasTip->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $ofertasTip->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $ofertasTip->id),
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