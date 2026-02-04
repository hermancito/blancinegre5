<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Sustitucion> $sustitucions
 */
?>
<div class="sustitucions index content">
    <?= $this->Html->link(__('New Sustitucion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Sustitucions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('fecha') ?></th>
                    <th><?= $this->Paginator->sort('hora_ini') ?></th>
                    <th><?= $this->Paginator->sort('hora_fin') ?></th>
                    <th><?= $this->Paginator->sort('monitor_id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th><?= $this->Paginator->sort('coste') ?></th>
                    <th><?= $this->Paginator->sort('justificada') ?></th>
                    <th><?= $this->Paginator->sort('motivo') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('salario') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('comodin1') ?></th>
                    <th><?= $this->Paginator->sort('comodin2') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sustitucions as $sustitucion): ?>
                <tr>
                    <td><?= $this->Number->format($sustitucion->id) ?></td>
                    <td><?= h($sustitucion->fecha) ?></td>
                    <td><?= h($sustitucion->hora_ini) ?></td>
                    <td><?= h($sustitucion->hora_fin) ?></td>
                    <td><?= $sustitucion->hasValue('monitor') ? $this->Html->link($sustitucion->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $sustitucion->monitor->id]) : '' ?></td>
                    <td><?= $sustitucion->hasValue('colegio') ? $this->Html->link($sustitucion->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $sustitucion->colegio->id]) : '' ?></td>
                    <td><?= $sustitucion->hasValue('activitat') ? $this->Html->link($sustitucion->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $sustitucion->activitat->id]) : '' ?></td>
                    <td><?= $sustitucion->coste === null ? '' : $this->Number->format($sustitucion->coste) ?></td>
                    <td><?= h($sustitucion->justificada) ?></td>
                    <td><?= h($sustitucion->motivo) ?></td>
                    <td><?= $sustitucion->hasValue('user') ? $this->Html->link($sustitucion->user->email, ['controller' => 'Users', 'action' => 'view', $sustitucion->user->id]) : '' ?></td>
                    <td><?= $sustitucion->salario === null ? '' : $this->Number->format($sustitucion->salario) ?></td>
                    <td><?= h($sustitucion->created) ?></td>
                    <td><?= h($sustitucion->modified) ?></td>
                    <td><?= h($sustitucion->comodin1) ?></td>
                    <td><?= h($sustitucion->comodin2) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $sustitucion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sustitucion->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $sustitucion->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $sustitucion->id),
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