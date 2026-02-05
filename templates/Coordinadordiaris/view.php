<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordinadordiari $coordinadordiari
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Coordinadordiari'), ['action' => 'edit', $coordinadordiari->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Coordinadordiari'), ['action' => 'delete', $coordinadordiari->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinadordiari->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Coordinadordiaris'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Coordinadordiari'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="coordinadordiaris view content">
            <h3><?= h($coordinadordiari->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $coordinadordiari->hasValue('colegio') ? $this->Html->link($coordinadordiari->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $coordinadordiari->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Coordinador') ?></th>
                    <td><?= $coordinadordiari->hasValue('coordinador') ? $this->Html->link($coordinadordiari->coordinador->username, ['controller' => 'Coordinadors', 'action' => 'view', $coordinadordiari->coordinador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Intervencion') ?></th>
                    <td><?= $coordinadordiari->hasValue('intervencion') ? $this->Html->link($coordinadordiari->intervencion->tipo_interv, ['controller' => 'Intervencions', 'action' => 'view', $coordinadordiari->intervencion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Resuelta') ?></th>
                    <td><?= h($coordinadordiari->resuelta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($coordinadordiari->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dia') ?></th>
                    <td><?= h($coordinadordiari->dia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Ini') ?></th>
                    <td><?= h($coordinadordiari->hora_ini) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Fin') ?></th>
                    <td><?= h($coordinadordiari->hora_fin) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($coordinadordiari->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($coordinadordiari->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($coordinadordiari->observ)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>