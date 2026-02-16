<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personalcontrol $personalcontrol
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Personalcontrol'), ['action' => 'edit', $personalcontrol->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Personalcontrol'), ['action' => 'delete', $personalcontrol->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalcontrol->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Personalcontrols'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Personalcontrol'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="personalcontrols view content">
            <h3><?= h($personalcontrol->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $personalcontrol->hasValue('user') ? $this->Html->link($personalcontrol->user->email, ['controller' => 'Users', 'action' => 'view', $personalcontrol->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipoincidencia') ?></th>
                    <td><?= $personalcontrol->hasValue('tipoincidencia') ? $this->Html->link($personalcontrol->tipoincidencia->descripc, ['controller' => 'Tipoincidencias', 'action' => 'view', $personalcontrol->tipoincidencia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Actor') ?></th>
                    <td><?= $personalcontrol->hasValue('actor') ? $this->Html->link($personalcontrol->actor->descripc, ['controller' => 'Actors', 'action' => 'view', $personalcontrol->actor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $personalcontrol->hasValue('colegio') ? $this->Html->link($personalcontrol->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $personalcontrol->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin1') ?></th>
                    <td><?= h($personalcontrol->comodin1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin2') ?></th>
                    <td><?= h($personalcontrol->comodin2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($personalcontrol->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($personalcontrol->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($personalcontrol->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descripc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($personalcontrol->descripc)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>