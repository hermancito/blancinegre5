<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Salario> $salarios
 */
?>
<div class="salarios index content">
    <?= $this->Html->link(__('New Salario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Salarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('sala_fijo') ?></th>
                    <th><?= $this->Paginator->sort('sala_vble') ?></th>
                    <th><?= $this->Paginator->sort('plus_var') ?></th>
                    <th><?= $this->Paginator->sort('complemento') ?></th>
                    <th><?= $this->Paginator->sort('dietas') ?></th>
                    <th><?= $this->Paginator->sort('eventos') ?></th>
                    <th><?= $this->Paginator->sort('it') ?></th>
                    <th><?= $this->Paginator->sort('absentismo') ?></th>
                    <th><?= $this->Paginator->sort('dto') ?></th>
                    <th><?= $this->Paginator->sort('nomina') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salarios as $salario): ?>
                <tr>
                    <td><?= $this->Number->format($salario->id) ?></td>
                    <td><?= $salario->hasValue('user') ? $this->Html->link($salario->user->email, ['controller' => 'Users', 'action' => 'view', $salario->user->id]) : '' ?></td>
                    <td><?= $this->Number->format($salario->sala_fijo) ?></td>
                    <td><?= $this->Number->format($salario->sala_vble) ?></td>
                    <td><?= $this->Number->format($salario->plus_var) ?></td>
                    <td><?= $this->Number->format($salario->complemento) ?></td>
                    <td><?= $this->Number->format($salario->dietas) ?></td>
                    <td><?= $this->Number->format($salario->eventos) ?></td>
                    <td><?= $this->Number->format($salario->it) ?></td>
                    <td><?= $this->Number->format($salario->absentismo) ?></td>
                    <td><?= $this->Number->format($salario->dto) ?></td>
                    <td><?= $this->Number->format($salario->nomina) ?></td>
                    <td><?= h($salario->created) ?></td>
                    <td><?= h($salario->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $salario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salario->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $salario->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $salario->id),
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