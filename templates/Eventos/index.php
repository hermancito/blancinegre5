<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Evento> $eventos
 */
?>
<div class="eventos index content">
    <?= $this->Html->link(__('New Evento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Eventos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('dia') ?></th>
                    <th><?= $this->Paginator->sort('hora_ini') ?></th>
                    <th><?= $this->Paginator->sort('hora_fin') ?></th>
                    <th><?= $this->Paginator->sort('destino') ?></th>
                    <th><?= $this->Paginator->sort('retribucion') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('comodin1') ?></th>
                    <th><?= $this->Paginator->sort('comodin2') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventos as $evento): ?>
                <tr>
                    <td><?= $this->Number->format($evento->id) ?></td>
                    <td><?= $evento->hasValue('user') ? $this->Html->link($evento->user->email, ['controller' => 'Users', 'action' => 'view', $evento->user->id]) : '' ?></td>
                    <td><?= h($evento->dia) ?></td>
                    <td><?= h($evento->hora_ini) ?></td>
                    <td><?= h($evento->hora_fin) ?></td>
                    <td><?= h($evento->destino) ?></td>
                    <td><?= $evento->retribucion === null ? '' : $this->Number->format($evento->retribucion) ?></td>
                    <td><?= h($evento->created) ?></td>
                    <td><?= h($evento->modified) ?></td>
                    <td><?= h($evento->comodin1) ?></td>
                    <td><?= h($evento->comodin2) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $evento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evento->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $evento->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $evento->id),
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