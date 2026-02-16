<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsgrupsAlumno> $activitatsgrupsAlumnos
 */
?>
<div class="activitatsgrupsAlumnos index content">
    <?= $this->Html->link(__('New Activitatsgrups Alumno'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitatsgrups Alumnos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitatsgrup_id') ?></th>
                    <th><?= $this->Paginator->sort('alumno_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsgrupsAlumnos as $activitatsgrupsAlumno): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsgrupsAlumno->id) ?></td>
                    <td><?= $activitatsgrupsAlumno->hasValue('activitatsgrup') ? $this->Html->link($activitatsgrupsAlumno->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrupsAlumno->activitatsgrup->id]) : '' ?></td>
                    <td><?= $activitatsgrupsAlumno->hasValue('alumno') ? $this->Html->link($activitatsgrupsAlumno->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $activitatsgrupsAlumno->alumno->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsgrupsAlumno->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsgrupsAlumno->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsgrupsAlumno->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsAlumno->id),
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