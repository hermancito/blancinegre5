<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Registrobaja> $registrobajas
 */
?>
<div class="registrobajas index content">
    <?= $this->Html->link(__('New Registrobaja'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registrobajas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('alumno_id') ?></th>
                    <th><?= $this->Paginator->sort('activitatsgrup_id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('fecha_baja') ?></th>
                    <th><?= $this->Paginator->sort('motivo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('ejecutada') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registrobajas as $registrobaja): ?>
                <tr>
                    <td><?= $this->Number->format($registrobaja->id) ?></td>
                    <td><?= $registrobaja->hasValue('alumno') ? $this->Html->link($registrobaja->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $registrobaja->alumno->id]) : '' ?></td>
                    <td><?= $registrobaja->hasValue('activitatsgrup') ? $this->Html->link($registrobaja->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $registrobaja->activitatsgrup->id]) : '' ?></td>
                    <td><?= $registrobaja->hasValue('colegio') ? $this->Html->link($registrobaja->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $registrobaja->colegio->id]) : '' ?></td>
                    <td><?= h($registrobaja->fecha_baja) ?></td>
                    <td><?= h($registrobaja->motivo) ?></td>
                    <td><?= h($registrobaja->created) ?></td>
                    <td><?= h($registrobaja->modified) ?></td>
                    <td><?= h($registrobaja->ejecutada) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registrobaja->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registrobaja->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $registrobaja->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $registrobaja->id),
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