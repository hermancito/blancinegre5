<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Nota> $notas
 */
?>
<div class="notas index content">
    <?= $this->Html->link(__('New Nota'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('alumno_id') ?></th>
                    <th><?= $this->Paginator->sort('comodin') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('activitat_id') ?></th>
                    <th><?= $this->Paginator->sort('cuatrim') ?></th>
                    <th><?= $this->Paginator->sort('anyo') ?></th>
                    <th><?= $this->Paginator->sort('curso') ?></th>
                    <th><?= $this->Paginator->sort('objetivos') ?></th>
                    <th><?= $this->Paginator->sort('contenidos') ?></th>
                    <th><?= $this->Paginator->sort('atencion') ?></th>
                    <th><?= $this->Paginator->sort('participa') ?></th>
                    <th><?= $this->Paginator->sort('ejerc') ?></th>
                    <th><?= $this->Paginator->sort('asist') ?></th>
                    <th><?= $this->Paginator->sort('actitud') ?></th>
                    <th><?= $this->Paginator->sort('respeto') ?></th>
                    <th><?= $this->Paginator->sort('validado') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notas as $nota): ?>
                <tr>
                    <td><?= $this->Number->format($nota->id) ?></td>
                    <td><?= $nota->hasValue('alumno') ? $this->Html->link($nota->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $nota->alumno->id]) : '' ?></td>
                    <td><?= h($nota->comodin) ?></td>
                    <td><?= $nota->hasValue('user') ? $this->Html->link($nota->user->email, ['controller' => 'Users', 'action' => 'view', $nota->user->id]) : '' ?></td>
                    <td><?= $nota->hasValue('activitat') ? $this->Html->link($nota->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $nota->activitat->id]) : '' ?></td>
                    <td><?= $nota->cuatrim === null ? '' : $this->Number->format($nota->cuatrim) ?></td>
                    <td><?= $nota->anyo === null ? '' : $this->Number->format($nota->anyo) ?></td>
                    <td><?= h($nota->curso) ?></td>
                    <td><?= h($nota->objetivos) ?></td>
                    <td><?= h($nota->contenidos) ?></td>
                    <td><?= h($nota->atencion) ?></td>
                    <td><?= h($nota->participa) ?></td>
                    <td><?= h($nota->ejerc) ?></td>
                    <td><?= h($nota->asist) ?></td>
                    <td><?= h($nota->actitud) ?></td>
                    <td><?= h($nota->respeto) ?></td>
                    <td><?= h($nota->validado) ?></td>
                    <td><?= h($nota->created) ?></td>
                    <td><?= h($nota->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $nota->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nota->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $nota->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $nota->id),
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