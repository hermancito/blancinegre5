<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Devolucione> $devoluciones
 */
?>
<div class="devoluciones index content">
    <?= $this->Html->link(__('New Devolucione'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Devoluciones') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('alumno_id') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('concepto') ?></th>
                    <th><?= $this->Paginator->sort('actividad') ?></th>
                    <th><?= $this->Paginator->sort('fecha_dev') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($devoluciones as $devolucione): ?>
                <tr>
                    <td><?= $this->Number->format($devolucione->id) ?></td>
                    <td><?= $devolucione->hasValue('colegio') ? $this->Html->link($devolucione->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $devolucione->colegio->id]) : '' ?></td>
                    <td><?= $devolucione->hasValue('alumno') ? $this->Html->link($devolucione->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $devolucione->alumno->id]) : '' ?></td>
                    <td><?= $devolucione->importe === null ? '' : $this->Number->format($devolucione->importe) ?></td>
                    <td><?= h($devolucione->concepto) ?></td>
                    <td><?= h($devolucione->actividad) ?></td>
                    <td><?= h($devolucione->fecha_dev) ?></td>
                    <td><?= h($devolucione->created) ?></td>
                    <td><?= h($devolucione->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $devolucione->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $devolucione->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $devolucione->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $devolucione->id),
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