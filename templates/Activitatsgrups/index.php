<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Activitatsgrup> $activitatsgrups
 */
?>
<div class="activitatsgrups index content">
    <?= $this->Html->link(__('New Activitatsgrup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitatsgrups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('aula') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('tipo_fijo') ?></th>
                    <th><?= $this->Paginator->sort('tipo_vble') ?></th>
                    <th><?= $this->Paginator->sort('sala_fijo') ?></th>
                    <th><?= $this->Paginator->sort('sala_vble') ?></th>
                    <th><?= $this->Paginator->sort('visible_familias') ?></th>
                    <th><?= $this->Paginator->sort('descripc') ?></th>
                    <th><?= $this->Paginator->sort('aplicar_jornada') ?></th>
                    <th><?= $this->Paginator->sort('alum_min') ?></th>
                    <th><?= $this->Paginator->sort('alum_max') ?></th>
                    <th><?= $this->Paginator->sort('fecha_inicio') ?></th>
                    <th><?= $this->Paginator->sort('fecha_fin') ?></th>
                    <th><?= $this->Paginator->sort('matricula') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsgrups as $activitatsgrup): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsgrup->id) ?></td>
                    <td><?= h($activitatsgrup->codigo) ?></td>
                    <td><?= $activitatsgrup->hasValue('activitat') ? $this->Html->link($activitatsgrup->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsgrup->activitat->id]) : '' ?></td>
                    <td><?= $activitatsgrup->hasValue('colegio') ? $this->Html->link($activitatsgrup->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $activitatsgrup->colegio->id]) : '' ?></td>
                    <td><?= h($activitatsgrup->aula) ?></td>
                    <td><?= h($activitatsgrup->created) ?></td>
                    <td><?= h($activitatsgrup->modified) ?></td>
                    <td><?= $this->Number->format($activitatsgrup->tipo_fijo) ?></td>
                    <td><?= $this->Number->format($activitatsgrup->tipo_vble) ?></td>
                    <td><?= $this->Number->format($activitatsgrup->sala_fijo) ?></td>
                    <td><?= $this->Number->format($activitatsgrup->sala_vble) ?></td>
                    <td><?= h($activitatsgrup->visible_familias) ?></td>
                    <td><?= h($activitatsgrup->descripc) ?></td>
                    <td><?= h($activitatsgrup->aplicar_jornada) ?></td>
                    <td><?= $this->Number->format($activitatsgrup->alum_min) ?></td>
                    <td><?= $this->Number->format($activitatsgrup->alum_max) ?></td>
                    <td><?= h($activitatsgrup->fecha_inicio) ?></td>
                    <td><?= h($activitatsgrup->fecha_fin) ?></td>
                    <td><?= $this->Number->format($activitatsgrup->matricula) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsgrup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsgrup->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsgrup->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrup->id),
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