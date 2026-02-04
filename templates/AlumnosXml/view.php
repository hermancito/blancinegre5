<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AlumnosXml $alumnosXml
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Alumnos Xml'), ['action' => 'edit', $alumnosXml->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Alumnos Xml'), ['action' => 'delete', $alumnosXml->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnosXml->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Alumnos Xml'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Alumnos Xml'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="alumnosXml view content">
            <h3><?= h($alumnosXml->xmlfile) ?></h3>
            <table>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $alumnosXml->hasValue('colegio') ? $this->Html->link($alumnosXml->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $alumnosXml->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Xmlfile') ?></th>
                    <td><?= h($alumnosXml->xmlfile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Xmlfile Dir') ?></th>
                    <td><?= h($alumnosXml->xmlfile_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($alumnosXml->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Grabado') ?></th>
                    <td><?= $alumnosXml->grabado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>