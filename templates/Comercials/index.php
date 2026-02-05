<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Comercial> $comercials
 */
?>
<div class="comercials index content">
    <?= $this->Html->link(__('New Comercial'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Comercials') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('nom_centro') ?></th>
                    <th><?= $this->Paginator->sort('localidad') ?></th>
                    <th><?= $this->Paginator->sort('agente_id') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th><?= $this->Paginator->sort('jornada') ?></th>
                    <th><?= $this->Paginator->sort('pax') ?></th>
                    <th><?= $this->Paginator->sort('control_admon') ?></th>
                    <th><?= $this->Paginator->sort('comarca') ?></th>
                    <th><?= $this->Paginator->sort('tipo_via') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('num') ?></th>
                    <th><?= $this->Paginator->sort('cp') ?></th>
                    <th><?= $this->Paginator->sort('provincia') ?></th>
                    <th><?= $this->Paginator->sort('tfno') ?></th>
                    <th><?= $this->Paginator->sort('fax') ?></th>
                    <th><?= $this->Paginator->sort('cif') ?></th>
                    <th><?= $this->Paginator->sort('gestion_actual') ?></th>
                    <th><?= $this->Paginator->sort('email_centro') ?></th>
                    <th><?= $this->Paginator->sort('contacto1_cargo') ?></th>
                    <th><?= $this->Paginator->sort('contacto1_nom_tfno') ?></th>
                    <th><?= $this->Paginator->sort('contacto1_mail') ?></th>
                    <th><?= $this->Paginator->sort('contacto2_cargo') ?></th>
                    <th><?= $this->Paginator->sort('contacto2_nom_tfno') ?></th>
                    <th><?= $this->Paginator->sort('contacto2_mail') ?></th>
                    <th><?= $this->Paginator->sort('contacto3_datos') ?></th>
                    <th><?= $this->Paginator->sort('matinal') ?></th>
                    <th><?= $this->Paginator->sort('mediodia') ?></th>
                    <th><?= $this->Paginator->sort('j_continua') ?></th>
                    <th><?= $this->Paginator->sort('tardes') ?></th>
                    <th><?= $this->Paginator->sort('jun_sept') ?></th>
                    <th><?= $this->Paginator->sort('vacacionales') ?></th>
                    <th><?= $this->Paginator->sort('ini_cto') ?></th>
                    <th><?= $this->Paginator->sort('ini_cto_agente') ?></th>
                    <th><?= $this->Paginator->sort('fin_cto') ?></th>
                    <th><?= $this->Paginator->sort('fin_cto_agente') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id') ?></th>
                    <th><?= $this->Paginator->sort('empresados_id') ?></th>
                    <th><?= $this->Paginator->sort('empresatres_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($comercials as $comercial): ?>
                <tr>
                    <td><?= $this->Number->format($comercial->id) ?></td>
                    <td><?= h($comercial->codigo) ?></td>
                    <td><?= h($comercial->nom_centro) ?></td>
                    <td><?= h($comercial->localidad) ?></td>
                    <td><?= $comercial->hasValue('agente') ? $this->Html->link($comercial->agente->nom_agente, ['controller' => 'Agentes', 'action' => 'view', $comercial->agente->id]) : '' ?></td>
                    <td><?= h($comercial->estado) ?></td>
                    <td><?= h($comercial->jornada) ?></td>
                    <td><?= $comercial->pax === null ? '' : $this->Number->format($comercial->pax) ?></td>
                    <td><?= h($comercial->control_admon) ?></td>
                    <td><?= h($comercial->comarca) ?></td>
                    <td><?= h($comercial->tipo_via) ?></td>
                    <td><?= h($comercial->direccion) ?></td>
                    <td><?= h($comercial->num) ?></td>
                    <td><?= h($comercial->cp) ?></td>
                    <td><?= h($comercial->provincia) ?></td>
                    <td><?= h($comercial->tfno) ?></td>
                    <td><?= h($comercial->fax) ?></td>
                    <td><?= h($comercial->cif) ?></td>
                    <td><?= h($comercial->gestion_actual) ?></td>
                    <td><?= h($comercial->email_centro) ?></td>
                    <td><?= h($comercial->contacto1_cargo) ?></td>
                    <td><?= h($comercial->contacto1_nom_tfno) ?></td>
                    <td><?= h($comercial->contacto1_mail) ?></td>
                    <td><?= h($comercial->contacto2_cargo) ?></td>
                    <td><?= h($comercial->contacto2_nom_tfno) ?></td>
                    <td><?= h($comercial->contacto2_mail) ?></td>
                    <td><?= h($comercial->contacto3_datos) ?></td>
                    <td><?= h($comercial->matinal) ?></td>
                    <td><?= h($comercial->mediodia) ?></td>
                    <td><?= h($comercial->j_continua) ?></td>
                    <td><?= h($comercial->tardes) ?></td>
                    <td><?= h($comercial->jun_sept) ?></td>
                    <td><?= h($comercial->vacacionales) ?></td>
                    <td><?= h($comercial->ini_cto) ?></td>
                    <td><?= h($comercial->ini_cto_agente) ?></td>
                    <td><?= h($comercial->fin_cto) ?></td>
                    <td><?= h($comercial->fin_cto_agente) ?></td>
                    <td><?= $comercial->hasValue('empresa') ? $this->Html->link($comercial->empresa->nom_empresa, ['controller' => 'Empresas', 'action' => 'view', $comercial->empresa->id]) : '' ?></td>
                    <td><?= $comercial->hasValue('empresado') ? $this->Html->link($comercial->empresado->nom_empresa, ['controller' => 'Empresasdos', 'action' => 'view', $comercial->empresado->id]) : '' ?></td>
                    <td><?= $comercial->hasValue('empresatre') ? $this->Html->link($comercial->empresatre->nom_empresa, ['controller' => 'Empresastres', 'action' => 'view', $comercial->empresatre->id]) : '' ?></td>
                    <td><?= h($comercial->created) ?></td>
                    <td><?= h($comercial->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $comercial->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comercial->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $comercial->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $comercial->id),
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