<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tipoincidencia> $tipoincidencias
 */
?>
<div class="tipoincidencias index content">
    <?= $this->Html->link(__('New Tipoincidencia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipoincidencias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descripc') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipoincidencias as $tipoincidencia): ?>
                <tr>
                    <td><?= $this->Number->format($tipoincidencia->id) ?></td>
                    <td><?= h($tipoincidencia->descripc) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tipoincidencia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoincidencia->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $tipoincidencia->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $tipoincidencia->id),
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