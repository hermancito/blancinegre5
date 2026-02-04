<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsColegio> $activitatsColegios
 */
?>
<div class="activitatsColegios index content">
    <?= $this->Html->link(__('New Activitats Colegio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitats Colegios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsColegios as $activitatsColegio): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsColegio->id) ?></td>
                    <td><?= $activitatsColegio->hasValue('activitat') ? $this->Html->link($activitatsColegio->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsColegio->activitat->id]) : '' ?></td>
                    <td><?= $activitatsColegio->hasValue('colegio') ? $this->Html->link($activitatsColegio->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $activitatsColegio->colegio->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsColegio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsColegio->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsColegio->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsColegio->id),
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