<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Personalcontrol> $personalcontrols
 */
?>
<div class="personalcontrols index content">
    <?= $this->Html->link(__('New Personalcontrol'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Personalcontrols') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('tipoincidencia_id') ?></th>
                    <th><?= $this->Paginator->sort('actor_id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('comodin1') ?></th>
                    <th><?= $this->Paginator->sort('comodin2') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personalcontrols as $personalcontrol): ?>
                <tr>
                    <td><?= $this->Number->format($personalcontrol->id) ?></td>
                    <td><?= $personalcontrol->hasValue('user') ? $this->Html->link($personalcontrol->user->email, ['controller' => 'Users', 'action' => 'view', $personalcontrol->user->id]) : '' ?></td>
                    <td><?= $personalcontrol->hasValue('tipoincidencia') ? $this->Html->link($personalcontrol->tipoincidencia->descripc, ['controller' => 'Tipoincidencias', 'action' => 'view', $personalcontrol->tipoincidencia->id]) : '' ?></td>
                    <td><?= $personalcontrol->hasValue('actor') ? $this->Html->link($personalcontrol->actor->descripc, ['controller' => 'Actors', 'action' => 'view', $personalcontrol->actor->id]) : '' ?></td>
                    <td><?= $personalcontrol->hasValue('colegio') ? $this->Html->link($personalcontrol->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $personalcontrol->colegio->id]) : '' ?></td>
                    <td><?= h($personalcontrol->created) ?></td>
                    <td><?= h($personalcontrol->modified) ?></td>
                    <td><?= h($personalcontrol->comodin1) ?></td>
                    <td><?= h($personalcontrol->comodin2) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $personalcontrol->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $personalcontrol->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $personalcontrol->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $personalcontrol->id),
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