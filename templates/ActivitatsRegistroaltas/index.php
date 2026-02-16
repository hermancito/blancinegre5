<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ActivitatsRegistroalta> $activitatsRegistroaltas
 */
?>
<div class="activitatsRegistroaltas index content">
    <?= $this->Html->link(__('New Activitats Registroalta'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Activitats Registroaltas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('registroalta_id') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($activitatsRegistroaltas as $activitatsRegistroalta): ?>
                <tr>
                    <td><?= $this->Number->format($activitatsRegistroalta->id) ?></td>
                    <td><?= $activitatsRegistroalta->hasValue('registroalta') ? $this->Html->link($activitatsRegistroalta->registroalta->alta_amplia, ['controller' => 'Registroaltas', 'action' => 'view', $activitatsRegistroalta->registroalta->id]) : '' ?></td>
                    <td><?= $activitatsRegistroalta->hasValue('activitat') ? $this->Html->link($activitatsRegistroalta->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsRegistroalta->activitat->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $activitatsRegistroalta->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitatsRegistroalta->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $activitatsRegistroalta->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $activitatsRegistroalta->id),
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