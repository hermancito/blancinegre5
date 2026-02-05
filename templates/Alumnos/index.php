<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Alumno> $alumnos
 */
?>
<div class="alumnos index content">
    <?= $this->Html->link(__('New Alumno'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alumnos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('user2_id') ?></th>
                    <th><?= $this->Paginator->sort('coleg_id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('nombre_apellidos') ?></th>
                    <th><?= $this->Paginator->sort('anyo') ?></th>
                    <th><?= $this->Paginator->sort('tfno') ?></th>
                    <th><?= $this->Paginator->sort('movil') ?></th>
                    <th><?= $this->Paginator->sort('activo') ?></th>
                    <th><?= $this->Paginator->sort('socio') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('cuenta') ?></th>
                    <th><?= $this->Paginator->sort('iban') ?></th>
                    <th><?= $this->Paginator->sort('titular') ?></th>
                    <th><?= $this->Paginator->sort('nif') ?></th>
                    <th><?= $this->Paginator->sort('cobro') ?></th>
                    <th><?= $this->Paginator->sort('recibo') ?></th>
                    <th><?= $this->Paginator->sort('material') ?></th>
                    <th><?= $this->Paginator->sort('ampa') ?></th>
                    <th><?= $this->Paginator->sort('eliminado') ?></th>
                    <th><?= $this->Paginator->sort('comedor') ?></th>
                    <th><?= $this->Paginator->sort('datos') ?></th>
                    <th><?= $this->Paginator->sort('info_mail') ?></th>
                    <th><?= $this->Paginator->sort('comodin') ?></th>
                    <th><?= $this->Paginator->sort('curso') ?></th>
                    <th><?= $this->Paginator->sort('matricula') ?></th>
                    <th><?= $this->Paginator->sort('no_socio') ?></th>
                    <th><?= $this->Paginator->sort('suplemento') ?></th>
                    <th><?= $this->Paginator->sort('dto_fijo') ?></th>
                    <th><?= $this->Paginator->sort('dto_porcentaje') ?></th>
                    <th><?= $this->Paginator->sort('suma_pfijo') ?></th>
                    <th><?= $this->Paginator->sort('suma_pvble') ?></th>
                    <th><?= $this->Paginator->sort('cuota_previa') ?></th>
                    <th><?= $this->Paginator->sort('cuota') ?></th>
                    <th><?= $this->Paginator->sort('nif_alumno') ?></th>
                    <th><?= $this->Paginator->sort('merito1') ?></th>
                    <th><?= $this->Paginator->sort('merito2') ?></th>
                    <th><?= $this->Paginator->sort('merito3') ?></th>
                    <th><?= $this->Paginator->sort('merito4') ?></th>
                    <th><?= $this->Paginator->sort('merito5') ?></th>
                    <th><?= $this->Paginator->sort('ingles_3a') ?></th>
                    <th><?= $this->Paginator->sort('ingles_4a') ?></th>
                    <th><?= $this->Paginator->sort('ingles_5a') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g1') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g2') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g3') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g4') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g5') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g6') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g7') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g8') ?></th>
                    <th><?= $this->Paginator->sort('ingles_g9') ?></th>
                    <th><?= $this->Paginator->sort('impago') ?></th>
                    <th><?= $this->Paginator->sort('texto_impago') ?></th>
                    <th><?= $this->Paginator->sort('sip') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alumnos as $alumno): ?>
                <tr>
                    <td><?= $this->Number->format($alumno->id) ?></td>
                    <td><?= $alumno->hasValue('user') ? $this->Html->link($alumno->user->email, ['controller' => 'Users', 'action' => 'view', $alumno->user->id]) : '' ?></td>
                    <td><?= $alumno->hasValue('user2') ? $this->Html->link($alumno->user2->email, ['controller' => 'Users', 'action' => 'view', $alumno->user2->id]) : '' ?></td>
                    <td><?= $alumno->hasValue('coleg') ? $this->Html->link($alumno->coleg->codigo, ['controller' => 'Colegios', 'action' => 'view', $alumno->coleg->id]) : '' ?></td>
                    <td><?= h($alumno->codigo) ?></td>
                    <td><?= h($alumno->nombre_apellidos) ?></td>
                    <td><?= $alumno->anyo === null ? '' : $this->Number->format($alumno->anyo) ?></td>
                    <td><?= $alumno->tfno === null ? '' : $this->Number->format($alumno->tfno) ?></td>
                    <td><?= $alumno->movil === null ? '' : $this->Number->format($alumno->movil) ?></td>
                    <td><?= h($alumno->activo) ?></td>
                    <td><?= h($alumno->socio) ?></td>
                    <td><?= h($alumno->created) ?></td>
                    <td><?= h($alumno->modified) ?></td>
                    <td><?= h($alumno->email) ?></td>
                    <td><?= h($alumno->cuenta) ?></td>
                    <td><?= h($alumno->iban) ?></td>
                    <td><?= h($alumno->titular) ?></td>
                    <td><?= h($alumno->nif) ?></td>
                    <td><?= h($alumno->cobro) ?></td>
                    <td><?= $alumno->recibo === null ? '' : $this->Number->format($alumno->recibo) ?></td>
                    <td><?= h($alumno->material) ?></td>
                    <td><?= $alumno->ampa === null ? '' : $this->Number->format($alumno->ampa) ?></td>
                    <td><?= h($alumno->eliminado) ?></td>
                    <td><?= h($alumno->comedor) ?></td>
                    <td><?= h($alumno->datos) ?></td>
                    <td><?= h($alumno->info_mail) ?></td>
                    <td><?= h($alumno->comodin) ?></td>
                    <td><?= h($alumno->curso) ?></td>
                    <td><?= $this->Number->format($alumno->matricula) ?></td>
                    <td><?= $this->Number->format($alumno->no_socio) ?></td>
                    <td><?= $this->Number->format($alumno->suplemento) ?></td>
                    <td><?= $this->Number->format($alumno->dto_fijo) ?></td>
                    <td><?= $this->Number->format($alumno->dto_porcentaje) ?></td>
                    <td><?= $this->Number->format($alumno->suma_pfijo) ?></td>
                    <td><?= $this->Number->format($alumno->suma_pvble) ?></td>
                    <td><?= $this->Number->format($alumno->cuota_previa) ?></td>
                    <td><?= $this->Number->format($alumno->cuota) ?></td>
                    <td><?= h($alumno->nif_alumno) ?></td>
                    <td><?= h($alumno->merito1) ?></td>
                    <td><?= h($alumno->merito2) ?></td>
                    <td><?= h($alumno->merito3) ?></td>
                    <td><?= h($alumno->merito4) ?></td>
                    <td><?= h($alumno->merito5) ?></td>
                    <td><?= h($alumno->ingles_3a) ?></td>
                    <td><?= h($alumno->ingles_4a) ?></td>
                    <td><?= h($alumno->ingles_5a) ?></td>
                    <td><?= h($alumno->ingles_g1) ?></td>
                    <td><?= h($alumno->ingles_g2) ?></td>
                    <td><?= h($alumno->ingles_g3) ?></td>
                    <td><?= h($alumno->ingles_g4) ?></td>
                    <td><?= h($alumno->ingles_g5) ?></td>
                    <td><?= h($alumno->ingles_g6) ?></td>
                    <td><?= h($alumno->ingles_g7) ?></td>
                    <td><?= h($alumno->ingles_g8) ?></td>
                    <td><?= h($alumno->ingles_g9) ?></td>
                    <td><?= h($alumno->impago) ?></td>
                    <td><?= h($alumno->texto_impago) ?></td>
                    <td><?= h($alumno->sip) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $alumno->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumno->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $alumno->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $alumno->id),
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