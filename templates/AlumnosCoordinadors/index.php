<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AlumnosCoordinador> $alumnosCoordinadors
 */
?>
<div class="alumnosCoordinadors index content">
    <?= $this->Html->link(__('New Alumnos Coordinador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnos Coordinadors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('alumno_id') ?></th>
                    <th><?= $this->Paginator->sort('coordinador_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnosCoordinadors as $alumnosCoordinador): ?>
                <tr>
                    <td><?= $this->Number->format($alumnosCoordinador->id) ?></td>
                    <td><?= $alumnosCoordinador->hasValue('alumno') ? $this->Html->link($alumnosCoordinador->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $alumnosCoordinador->alumno->id]) : '' ?></td>
                    <td><?= $alumnosCoordinador->hasValue('coordinador') ? $this->Html->link($alumnosCoordinador->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $alumnosCoordinador->coordinador->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumnosCoordinador->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnosCoordinador->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $alumnosCoordinador->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $alumnosCoordinador->id),
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