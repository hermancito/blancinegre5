<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ofertaspreciosact> $ofertaspreciosacts
 */
?>
<div class="ofertaspreciosacts index content">
    <?= $this->Html->link(__('New Ofertaspreciosact'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ofertaspreciosacts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom_activitat') ?></th>
                    <th><?= $this->Paginator->sort('grupo') ?></th>
                    <th><?= $this->Paginator->sort('start') ?></th>
                    <th><?= $this->Paginator->sort('basic') ?></th>
                    <th><?= $this->Paginator->sort('advance') ?></th>
                    <th><?= $this->Paginator->sort('premium') ?></th>
                    <th><?= $this->Paginator->sort('premium_plus') ?></th>
                    <th><?= $this->Paginator->sort('ratio') ?></th>
                    <th><?= $this->Paginator->sort('material_observ') ?></th>
                    <th><?= $this->Paginator->sort('accion_horario') ?></th>
                    <th><?= $this->Paginator->sort('accion_ubicacion') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ofertaspreciosacts as $ofertaspreciosact): ?>
                <tr>
                    <td><?= $this->Number->format($ofertaspreciosact->id) ?></td>
                    <td><?= h($ofertaspreciosact->nom_activitat) ?></td>
                    <td><?= h($ofertaspreciosact->grupo) ?></td>
                    <td><?= $this->Number->format($ofertaspreciosact->start) ?></td>
                    <td><?= $this->Number->format($ofertaspreciosact->basic) ?></td>
                    <td><?= $this->Number->format($ofertaspreciosact->advance) ?></td>
                    <td><?= $this->Number->format($ofertaspreciosact->premium) ?></td>
                    <td><?= $this->Number->format($ofertaspreciosact->premium_plus) ?></td>
                    <td><?= h($ofertaspreciosact->ratio) ?></td>
                    <td><?= h($ofertaspreciosact->material_observ) ?></td>
                    <td><?= h($ofertaspreciosact->accion_horario) ?></td>
                    <td><?= h($ofertaspreciosact->accion_ubicacion) ?></td>
                    <td><?= h($ofertaspreciosact->created) ?></td>
                    <td><?= h($ofertaspreciosact->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ofertaspreciosact->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ofertaspreciosact->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $ofertaspreciosact->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $ofertaspreciosact->id),
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