<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Monitor> $monitors
 */
?>
<div class="monitors index content">
    <?= $this->Html->link(__('New Monitor'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Monitors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('poblacion') ?></th>
                    <th><?= $this->Paginator->sort('tfno1') ?></th>
                    <th><?= $this->Paginator->sort('tfno2') ?></th>
                    <th><?= $this->Paginator->sort('nif') ?></th>
                    <th><?= $this->Paginator->sort('validado') ?></th>
                    <th><?= $this->Paginator->sort('bolsa') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($monitors as $monitor): ?>
                <tr>
                    <td><?= $this->Number->format($monitor->id) ?></td>
                    <td><?= h($monitor->codigo) ?></td>
                    <td><?= h($monitor->username) ?></td>
                    <td><?= h($monitor->email) ?></td>
                    <td><?= h($monitor->nombre) ?></td>
                    <td><?= h($monitor->apellidos) ?></td>
                    <td><?= h($monitor->poblacion) ?></td>
                    <td><?= $monitor->tfno1 === null ? '' : $this->Number->format($monitor->tfno1) ?></td>
                    <td><?= $monitor->tfno2 === null ? '' : $this->Number->format($monitor->tfno2) ?></td>
                    <td><?= h($monitor->nif) ?></td>
                    <td><?= h($monitor->validado) ?></td>
                    <td><?= h($monitor->bolsa) ?></td>
                    <td><?= h($monitor->created) ?></td>
                    <td><?= h($monitor->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $monitor->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $monitor->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $monitor->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $monitor->id),
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