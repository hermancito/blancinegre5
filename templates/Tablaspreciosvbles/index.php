<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Tablaspreciosvble> $tablaspreciosvbles
 */
?>
<div class="tablaspreciosvbles index content">
    <?= $this->Html->link(__('New Tablaspreciosvble'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tablaspreciosvbles') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre_tabla') ?></th>
                    <th><?= $this->Paginator->sort('hora1') ?></th>
                    <th><?= $this->Paginator->sort('hora1_media') ?></th>
                    <th><?= $this->Paginator->sort('hora2') ?></th>
                    <th><?= $this->Paginator->sort('hora2_media') ?></th>
                    <th><?= $this->Paginator->sort('hora3') ?></th>
                    <th><?= $this->Paginator->sort('hora3_media') ?></th>
                    <th><?= $this->Paginator->sort('hora4') ?></th>
                    <th><?= $this->Paginator->sort('hora4_media') ?></th>
                    <th><?= $this->Paginator->sort('hora5') ?></th>
                    <th><?= $this->Paginator->sort('hora5_media') ?></th>
                    <th><?= $this->Paginator->sort('hora6') ?></th>
                    <th><?= $this->Paginator->sort('hora6_media') ?></th>
                    <th><?= $this->Paginator->sort('hora7') ?></th>
                    <th><?= $this->Paginator->sort('hora7_media') ?></th>
                    <th><?= $this->Paginator->sort('hora8') ?></th>
                    <th><?= $this->Paginator->sort('hora8_media') ?></th>
                    <th><?= $this->Paginator->sort('hora9') ?></th>
                    <th><?= $this->Paginator->sort('hora9_media') ?></th>
                    <th><?= $this->Paginator->sort('hora10') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tablaspreciosvbles as $tablaspreciosvble): ?>
                <tr>
                    <td><?= $this->Number->format($tablaspreciosvble->id) ?></td>
                    <td><?= h($tablaspreciosvble->nombre_tabla) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora1) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora1_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora2) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora2_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora3) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora3_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora4) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora4_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora5) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora5_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora6) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora6_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora7) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora7_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora8) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora8_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora9) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora9_media) ?></td>
                    <td><?= $this->Number->format($tablaspreciosvble->hora10) ?></td>
                    <td><?= h($tablaspreciosvble->created) ?></td>
                    <td><?= h($tablaspreciosvble->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tablaspreciosvble->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tablaspreciosvble->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $tablaspreciosvble->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $tablaspreciosvble->id),
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