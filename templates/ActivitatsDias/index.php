<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsDia> $activitatsDias
 */
?>
<div class="activitatsDias index content">
    <?= $this->Html->link(__('New Activitats Dia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitats Dias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th><?= $this->Paginator->sort('dia_id') ?></th>
                    <th><?= $this->Paginator->sort('hora_ini') ?></th>
                    <th><?= $this->Paginator->sort('hora_fin') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsDias as $activitatsDia): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsDia->id) ?></td>
                    <td><?= $activitatsDia->hasValue('activitat') ? $this->Html->link($activitatsDia->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsDia->activitat->id]) : '' ?></td>
                    <td><?= $activitatsDia->hasValue('dia') ? $this->Html->link($activitatsDia->dia->id, ['controller' => 'Dias', 'action' => 'view', $activitatsDia->dia->id]) : '' ?></td>
                    <td><?= h($activitatsDia->hora_ini) ?></td>
                    <td><?= h($activitatsDia->hora_fin) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsDia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsDia->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsDia->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsDia->id),
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