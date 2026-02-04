<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Intervencion> $intervencions
 */
?>
<div class="intervencions index content">
    <?= $this->Html->link(__('New Intervencion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Intervencions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('tipo_interv') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($intervencions as $intervencion): ?>
                <tr>
                    <td><?= $this->Number->format($intervencion->id) ?></td>
                    <td><?= h($intervencion->tipo_interv) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $intervencion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $intervencion->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $intervencion->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $intervencion->id),
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