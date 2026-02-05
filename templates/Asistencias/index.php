<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Asistencia> $asistencias
 */
?>
<div class="asistencias index content">
    <?= $this->Html->link(__('New Asistencia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Asistencias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('alumno_id') ?></th>
                    <th><?= $this->Paginator->sort('activitatsgrup_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asistencias as $asistencia): ?>
                <tr>
                    <td><?= $this->Number->format($asistencia->id) ?></td>
                    <td><?= $asistencia->hasValue('alumno') ? $this->Html->link($asistencia->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $asistencia->alumno->id]) : '' ?></td>
                    <td><?= $asistencia->hasValue('activitatsgrup') ? $this->Html->link($asistencia->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $asistencia->activitatsgrup->id]) : '' ?></td>
                    <td><?= h($asistencia->created) ?></td>
                    <td><?= h($asistencia->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $asistencia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asistencia->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $asistencia->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $asistencia->id),
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