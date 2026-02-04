<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Coordinador> $coordinadors
 */
?>
<div class="coordinadors index content">
    <?= $this->Html->link(__('New Coordinador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Coordinadors') ?></h3>
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
                    <th><?= $this->Paginator->sort('tfno1') ?></th>
                    <th><?= $this->Paginator->sort('tfno2') ?></th>
                    <th><?= $this->Paginator->sort('nif') ?></th>
                    <th><?= $this->Paginator->sort('validado') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($coordinadors as $coordinador): ?>
                <tr>
                    <td><?= $this->Number->format($coordinador->id) ?></td>
                    <td><?= h($coordinador->codigo) ?></td>
                    <td><?= h($coordinador->username) ?></td>
                    <td><?= h($coordinador->email) ?></td>
                    <td><?= h($coordinador->nombre) ?></td>
                    <td><?= h($coordinador->apellidos) ?></td>
                    <td><?= $coordinador->tfno1 === null ? '' : $this->Number->format($coordinador->tfno1) ?></td>
                    <td><?= $coordinador->tfno2 === null ? '' : $this->Number->format($coordinador->tfno2) ?></td>
                    <td><?= h($coordinador->nif) ?></td>
                    <td><?= h($coordinador->validado) ?></td>
                    <td><?= h($coordinador->created) ?></td>
                    <td><?= h($coordinador->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $coordinador->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordinador->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $coordinador->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $coordinador->id),
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