<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Colegio> $colegios
 */
?>
<div class="colegios index content">
    <?= $this->Html->link(__('New Colegio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Colegios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('cp') ?></th>
                    <th><?= $this->Paginator->sort('poblacion') ?></th>
                    <th><?= $this->Paginator->sort('eq_directivo') ?></th>
                    <th><?= $this->Paginator->sort('tfno_eqdirect') ?></th>
                    <th><?= $this->Paginator->sort('email_eqdirectivo') ?></th>
                    <th><?= $this->Paginator->sort('pdte_ampa') ?></th>
                    <th><?= $this->Paginator->sort('tfno_pdte') ?></th>
                    <th><?= $this->Paginator->sort('email_pdte') ?></th>
                    <th><?= $this->Paginator->sort('resp_act') ?></th>
                    <th><?= $this->Paginator->sort('tfno_resp') ?></th>
                    <th><?= $this->Paginator->sort('email_resp') ?></th>
                    <th><?= $this->Paginator->sort('conserge') ?></th>
                    <th><?= $this->Paginator->sort('tfno_conserge') ?></th>
                    <th><?= $this->Paginator->sort('email_conserge') ?></th>
                    <th><?= $this->Paginator->sort('email_centro') ?></th>
                    <th><?= $this->Paginator->sort('cif_centro') ?></th>
                    <th><?= $this->Paginator->sort('email_ampa') ?></th>
                    <th><?= $this->Paginator->sort('cif_ampa') ?></th>
                    <th><?= $this->Paginator->sort('cesion_llaves') ?></th>
                    <th><?= $this->Paginator->sort('unidades_llaves') ?></th>
                    <th><?= $this->Paginator->sort('alarma') ?></th>
                    <th><?= $this->Paginator->sort('iban_centro') ?></th>
                    <th><?= $this->Paginator->sort('iban_ampa') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('tablaspreciosvble_id') ?></th>
                    <th><?= $this->Paginator->sort('suplemento_nosocios') ?></th>
                    <th><?= $this->Paginator->sort('porcentaje_nosocios') ?></th>
                    <th><?= $this->Paginator->sort('mostrar_cuota') ?></th>
                    <th><?= $this->Paginator->sort('dcto_hermanos') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($colegios as $colegio): ?>
                <tr>
                    <td><?= $this->Number->format($colegio->id) ?></td>
                    <td><?= h($colegio->codigo) ?></td>
                    <td><?= h($colegio->username) ?></td>
                    <td><?= h($colegio->direccion) ?></td>
                    <td><?= h($colegio->cp) ?></td>
                    <td><?= h($colegio->poblacion) ?></td>
                    <td><?= h($colegio->eq_directivo) ?></td>
                    <td><?= $colegio->tfno_eqdirect === null ? '' : $this->Number->format($colegio->tfno_eqdirect) ?></td>
                    <td><?= h($colegio->email_eqdirectivo) ?></td>
                    <td><?= h($colegio->pdte_ampa) ?></td>
                    <td><?= $colegio->tfno_pdte === null ? '' : $this->Number->format($colegio->tfno_pdte) ?></td>
                    <td><?= h($colegio->email_pdte) ?></td>
                    <td><?= h($colegio->resp_act) ?></td>
                    <td><?= $colegio->tfno_resp === null ? '' : $this->Number->format($colegio->tfno_resp) ?></td>
                    <td><?= h($colegio->email_resp) ?></td>
                    <td><?= h($colegio->conserge) ?></td>
                    <td><?= $colegio->tfno_conserge === null ? '' : $this->Number->format($colegio->tfno_conserge) ?></td>
                    <td><?= h($colegio->email_conserge) ?></td>
                    <td><?= h($colegio->email_centro) ?></td>
                    <td><?= h($colegio->cif_centro) ?></td>
                    <td><?= h($colegio->email_ampa) ?></td>
                    <td><?= h($colegio->cif_ampa) ?></td>
                    <td><?= h($colegio->cesion_llaves) ?></td>
                    <td><?= $colegio->unidades_llaves === null ? '' : $this->Number->format($colegio->unidades_llaves) ?></td>
                    <td><?= h($colegio->alarma) ?></td>
                    <td><?= h($colegio->iban_centro) ?></td>
                    <td><?= h($colegio->iban_ampa) ?></td>
                    <td><?= h($colegio->created) ?></td>
                    <td><?= h($colegio->modified) ?></td>
                    <td><?= $colegio->hasValue('tablaspreciosvble') ? $this->Html->link($colegio->tablaspreciosvble->nombre_tabla, ['controller' => 'Tablaspreciosvbles', 'action' => 'view', $colegio->tablaspreciosvble->id]) : '' ?></td>
                    <td><?= $this->Number->format($colegio->suplemento_nosocios) ?></td>
                    <td><?= $this->Number->format($colegio->porcentaje_nosocios) ?></td>
                    <td><?= h($colegio->mostrar_cuota) ?></td>
                    <td><?= h($colegio->dcto_hermanos) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $colegio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colegio->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $colegio->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $colegio->id),
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