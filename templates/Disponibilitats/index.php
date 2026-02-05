<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Disponibilitat> $disponibilitats
 */
?>
<div class="disponibilitats index content">
    <?= $this->Html->link(__('New Disponibilitat'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Disponibilitats') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('monitor_id') ?></th>
                    <th><?= $this->Paginator->sort('dia_id') ?></th>
                    <th><?= $this->Paginator->sort('hora_id') ?></th>
                    <th><?= $this->Paginator->sort('tiponodisponibilitat_id') ?></th>
                    <th><?= $this->Paginator->sort('activitatsgrup_id') ?></th>
                    <th><?= $this->Paginator->sort('disponible') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($disponibilitats as $disponibilitat): ?>
                <tr>
                    <td><?= $this->Number->format($disponibilitat->id) ?></td>
                    <td><?= $disponibilitat->hasValue('monitor') ? $this->Html->link($disponibilitat->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $disponibilitat->monitor->id]) : '' ?></td>
                    <td><?= $disponibilitat->hasValue('dia') ? $this->Html->link($disponibilitat->dia->id, ['controller' => 'Dias', 'action' => 'view', $disponibilitat->dia->id]) : '' ?></td>
                    <td><?= $disponibilitat->hasValue('hora') ? $this->Html->link($disponibilitat->hora->id, ['controller' => 'Horas', 'action' => 'view', $disponibilitat->hora->id]) : '' ?></td>
                    <td><?= $disponibilitat->hasValue('tiponodisponibilitat') ? $this->Html->link($disponibilitat->tiponodisponibilitat->descripc, ['controller' => 'Tiponodisponibilitats', 'action' => 'view', $disponibilitat->tiponodisponibilitat->id]) : '' ?></td>
                    <td><?= $disponibilitat->hasValue('activitatsgrup') ? $this->Html->link($disponibilitat->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $disponibilitat->activitatsgrup->id]) : '' ?></td>
                    <td><?= h($disponibilitat->disponible) ?></td>
                    <td><?= h($disponibilitat->created) ?></td>
                    <td><?= h($disponibilitat->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $disponibilitat->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $disponibilitat->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $disponibilitat->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $disponibilitat->id),
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