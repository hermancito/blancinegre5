<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificacion $notificacion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Notificacion'), ['action' => 'edit', $notificacion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Notificacion'), ['action' => 'delete', $notificacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificacion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notificacions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Notificacion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notificacions view content">
            <h3><?= h($notificacion->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $notificacion->hasValue('user') ? $this->Html->link($notificacion->user->email, ['controller' => 'Users', 'action' => 'view', $notificacion->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $notificacion->hasValue('activitat') ? $this->Html->link($notificacion->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $notificacion->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $notificacion->hasValue('colegio') ? $this->Html->link($notificacion->colegio->label, ['controller' => 'Colegios', 'action' => 'view', $notificacion->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($notificacion->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($notificacion->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo Dir') ?></th>
                    <td><?= h($notificacion->photo_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($notificacion->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($notificacion->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($notificacion->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validado') ?></th>
                    <td><?= $notificacion->validado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($notificacion->descripc)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Notificacionpdfs') ?></h4>
                <?php if (!empty($notificacion->notificacionpdfs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Notificacion Id') ?></th>
                            <th><?= __('Pdf') ?></th>
                            <th><?= __('Pdf Dir') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($notificacion->notificacionpdfs as $notificacionpdf) : ?>
                        <tr>
                            <td><?= h($notificacionpdf->id) ?></td>
                            <td><?= h($notificacionpdf->notificacion_id) ?></td>
                            <td><?= h($notificacionpdf->pdf) ?></td>
                            <td><?= h($notificacionpdf->pdf_dir) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notificacionpdfs', 'action' => 'view', $notificacionpdf->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notificacionpdfs', 'action' => 'edit', $notificacionpdf->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Notificacionpdfs', 'action' => 'delete', $notificacionpdf->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $notificacionpdf->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>