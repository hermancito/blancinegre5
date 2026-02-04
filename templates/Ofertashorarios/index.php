<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ofertashorario> $ofertashorarios
 */
?>
<div class="ofertashorarios index content">
    <?= $this->Html->link(__('New Ofertashorario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ofertashorarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('intervalo') ?></th>
                    <th><?= $this->Paginator->sort('accion') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ofertashorarios as $ofertashorario): ?>
                <tr>
                    <td><?= $this->Number->format($ofertashorario->id) ?></td>
                    <td><?= h($ofertashorario->intervalo) ?></td>
                    <td><?= h($ofertashorario->accion) ?></td>
                    <td><?= $this->Number->format($ofertashorario->importe) ?></td>
                    <td><?= h($ofertashorario->created) ?></td>
                    <td><?= h($ofertashorario->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ofertashorario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ofertashorario->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $ofertashorario->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $ofertashorario->id),
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