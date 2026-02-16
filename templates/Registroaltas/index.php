<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Registroalta> $registroaltas
 */
?>
<div class="registroaltas index content">
    <?= $this->Html->link(__('New Registroalta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Registroaltas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('alumno_id') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('concepto') ?></th>
                    <th><?= $this->Paginator->sort('alta_amplia') ?></th>
                    <th><?= $this->Paginator->sort('material') ?></th>
                    <th><?= $this->Paginator->sort('fecha_alta') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registroaltas as $registroalta): ?>
                <tr>
                    <td><?= $this->Number->format($registroalta->id) ?></td>
                    <td><?= $registroalta->hasValue('colegio') ? $this->Html->link($registroalta->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $registroalta->colegio->id]) : '' ?></td>
                    <td><?= $registroalta->hasValue('alumno') ? $this->Html->link($registroalta->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $registroalta->alumno->id]) : '' ?></td>
                    <td><?= $registroalta->importe === null ? '' : $this->Number->format($registroalta->importe) ?></td>
                    <td><?= h($registroalta->concepto) ?></td>
                    <td><?= h($registroalta->alta_amplia) ?></td>
                    <td><?= h($registroalta->material) ?></td>
                    <td><?= h($registroalta->fecha_alta) ?></td>
                    <td><?= h($registroalta->created) ?></td>
                    <td><?= h($registroalta->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $registroalta->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registroalta->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $registroalta->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $registroalta->id),
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