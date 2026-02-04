<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\AlumnosXml> $alumnosXml
 */
?>
<div class="alumnosXml index content">
    <?= $this->Html->link(__('New Alumnos Xml'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnos Xml') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('xmlfile') ?></th>
                    <th><?= $this->Paginator->sort('xmlfile_dir') ?></th>
                    <th><?= $this->Paginator->sort('grabado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnosXml as $alumnosXml): ?>
                <tr>
                    <td><?= $this->Number->format($alumnosXml->id) ?></td>
                    <td><?= $alumnosXml->hasValue('colegio') ? $this->Html->link($alumnosXml->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $alumnosXml->colegio->id]) : '' ?></td>
                    <td><?= h($alumnosXml->xmlfile) ?></td>
                    <td><?= h($alumnosXml->xmlfile_dir) ?></td>
                    <td><?= h($alumnosXml->grabado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumnosXml->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnosXml->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $alumnosXml->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $alumnosXml->id),
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