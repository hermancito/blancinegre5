<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ColegiosCoordinador> $colegiosCoordinadors
 */
?>
<div class="colegiosCoordinadors index content">
    <?= $this->Html->link(__('New Colegios Coordinador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Colegios Coordinadors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('coordinador_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($colegiosCoordinadors as $colegiosCoordinador): ?>
                <tr>
                    <td><?= $this->Number->format($colegiosCoordinador->id) ?></td>
                    <td><?= $colegiosCoordinador->hasValue('colegio') ? $this->Html->link($colegiosCoordinador->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $colegiosCoordinador->colegio->id]) : '' ?></td>
                    <td><?= $colegiosCoordinador->hasValue('coordinador') ? $this->Html->link($colegiosCoordinador->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $colegiosCoordinador->coordinador->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $colegiosCoordinador->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colegiosCoordinador->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $colegiosCoordinador->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $colegiosCoordinador->id),
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