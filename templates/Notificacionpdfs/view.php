<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notificacionpdf $notificacionpdf
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Notificacionpdf'), ['action' => 'edit', $notificacionpdf->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Notificacionpdf'), ['action' => 'delete', $notificacionpdf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificacionpdf->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notificacionpdfs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Notificacionpdf'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notificacionpdfs view content">
            <h3><?= h($notificacionpdf->pdf) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $notificacionpdf->hasValue('user') ? $this->Html->link($notificacionpdf->user->email, ['controller' => 'Users', 'action' => 'view', $notificacionpdf->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Notificacion') ?></th>
                    <td><?= $notificacionpdf->hasValue('notificacion') ? $this->Html->link($notificacionpdf->notificacion->nombre, ['controller' => 'Notificacions', 'action' => 'view', $notificacionpdf->notificacion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Pdf') ?></th>
                    <td><?= h($notificacionpdf->pdf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pdf Dir') ?></th>
                    <td><?= h($notificacionpdf->pdf_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($notificacionpdf->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>