<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Notificacion> $notificacions
 */
?>
<div class="notificacions index content">
    <?= $this->Html->link(__('New Notificacion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notificacions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('photo_dir') ?></th>
                    <th><?= $this->Paginator->sort('validado') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notificacions as $notificacion): ?>
                <tr>
                    <td><?= $this->Number->format($notificacion->id) ?></td>
                    <td><?= $notificacion->hasValue('user') ? $this->Html->link($notificacion->user->email, ['controller' => 'Users', 'action' => 'view', $notificacion->user->id]) : '' ?></td>
                    <td><?= $notificacion->hasValue('activitat') ? $this->Html->link($notificacion->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $notificacion->activitat->id]) : '' ?></td>
                    <td><?= $notificacion->hasValue('colegio') ? $this->Html->link($notificacion->colegio->label, ['controller' => 'Colegios', 'action' => 'view', $notificacion->colegio->id]) : '' ?></td>
                    <td><?= h($notificacion->nombre) ?></td>
                    <td><?= h($notificacion->photo) ?></td>
                    <td><?= h($notificacion->photo_dir) ?></td>
                    <td><?= h($notificacion->validado) ?></td>
                    <td><?= h($notificacion->created) ?></td>
                    <td><?= h($notificacion->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $notificacion->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notificacion->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $notificacion->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $notificacion->id),
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