<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsgrupsJornadasgrup> $activitatsgrupsJornadasgrups
 */
?>
<div class="activitatsgrupsJornadasgrups index content">
    <?= $this->Html->link(__('New Activitatsgrups Jornadasgrup'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitatsgrups Jornadasgrups') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('activitatsgrup_id') ?></th>
                    <th><?= $this->Paginator->sort('jornadasgrup_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsgrupsJornadasgrups as $activitatsgrupsJornadasgrup): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsgrupsJornadasgrup->id) ?></td>
                    <td><?= $activitatsgrupsJornadasgrup->hasValue('activitatsgrup') ? $this->Html->link($activitatsgrupsJornadasgrup->activitatsgrup->codigo, ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrupsJornadasgrup->activitatsgrup->id]) : '' ?></td>
                    <td><?= $activitatsgrupsJornadasgrup->hasValue('jornadasgrup') ? $this->Html->link($activitatsgrupsJornadasgrup->jornadasgrup->codigo, ['controller' => 'Jornadasgrups', 'action' => 'view', $activitatsgrupsJornadasgrup->jornadasgrup->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsgrupsJornadasgrup->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsgrupsJornadasgrup->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsgrupsJornadasgrup->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrupsJornadasgrup->id),
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