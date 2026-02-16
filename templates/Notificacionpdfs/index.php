<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Notificacionpdf> $notificacionpdfs
 */
?>
<div class="notificacionpdfs index content">
    <?= $this->Html->link(__('New Notificacionpdf'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notificacionpdfs') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('notificacion_id') ?></th>
                    <th><?= $this->Paginator->sort('pdf') ?></th>
                    <th><?= $this->Paginator->sort('pdf_dir') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notificacionpdfs as $notificacionpdf): ?>
                <tr>
                    <td><?= $this->Number->format($notificacionpdf->id) ?></td>
                    <td><?= $notificacionpdf->hasValue('user') ? $this->Html->link($notificacionpdf->user->email, ['controller' => 'Users', 'action' => 'view', $notificacionpdf->user->id]) : '' ?></td>
                    <td><?= $notificacionpdf->hasValue('notificacion') ? $this->Html->link($notificacionpdf->notificacion->nombre, ['controller' => 'Notificacions', 'action' => 'view', $notificacionpdf->notificacion->id]) : '' ?></td>
                    <td><?= h($notificacionpdf->pdf) ?></td>
                    <td><?= h($notificacionpdf->pdf_dir) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $notificacionpdf->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notificacionpdf->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $notificacionpdf->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $notificacionpdf->id),
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