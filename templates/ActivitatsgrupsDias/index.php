<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsgrupsDia> $activitatsgrupsDias
 */
?>
<div class="activitatsgrupsDias index content">
    <?= $this->Html->link(__('New Activitatsgrups Dia'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitatsgrups Dias') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitatsgrup_id') ?></th>
                    <th><?= $this->Paginator->sort('dia_id') ?></th>
                    <th><?= $this->Paginator->sort('hora_ini') ?></th>
                    <th><?= $this->Paginator->sort('hora_fin') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsgrupsDias as $activitatsgrupsDia): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsgrupsDia->id) ?></td>
                    <td><?= $activitatsgrupsDia->hasValue('activitatsgrup') ? $this->Html->link($activitatsgrupsDia->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrupsDia->activitatsgrup->id]) : '' ?></td>
                    <td><?= $activitatsgrupsDia->hasValue('dia') ? $this->Html->link($activitatsgrupsDia->dia->id, ['controller' => 'Dias', 'action' => 'view', $activitatsgrupsDia->dia->id]) : '' ?></td>
                    <td><?= h($activitatsgrupsDia->hora_ini) ?></td>
                    <td><?= h($activitatsgrupsDia->hora_fin) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsgrupsDia->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsgrupsDia->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsgrupsDia->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsDia->id),
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