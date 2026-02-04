<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ubicacion> $ubicacions
 */
?>
<div class="ubicacions index content">
    <?= $this->Html->link(__('New Ubicacion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ubicacions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('intervalo') ?></th>
                    <th><?= $this->Paginator->sort('accion') ?></th>
                    <th><?= $this->Paginator->sort('importe') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ubicacions as $ubicacion): ?>
                <tr>
                    <td><?= $this->Number->format($ubicacion->id) ?></td>
                    <td><?= h($ubicacion->intervalo) ?></td>
                    <td><?= h($ubicacion->accion) ?></td>
                    <td><?= $this->Number->format($ubicacion->importe) ?></td>
                    <td><?= h($ubicacion->created) ?></td>
                    <td><?= h($ubicacion->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ubicacion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ubicacion->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $ubicacion->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $ubicacion->id),
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