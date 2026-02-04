<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agente $agente
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Agente'), ['action' => 'edit', $agente->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Agente'), ['action' => 'delete', $agente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agente->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Agentes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Agente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="agentes view content">
            <h3><?= h($agente->nom_agente) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Agente') ?></th>
                    <td><?= h($agente->nom_agente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($agente->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($agente->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($agente->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Comercials') ?></h4>
                <?php if (!empty($agente->comercials)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Nom Centro') ?></th>
                            <th><?= __('Localidad') ?></th>
                            <th><?= __('Estado') ?></th>
                            <th><?= __('Jornada') ?></th>
                            <th><?= __('Pax') ?></th>
                            <th><?= __('Control Admon') ?></th>
                            <th><?= __('Comarca') ?></th>
                            <th><?= __('Tipo Via') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Num') ?></th>
                            <th><?= __('Cp') ?></th>
                            <th><?= __('Provincia') ?></th>
                            <th><?= __('Tfno') ?></th>
                            <th><?= __('Fax') ?></th>
                            <th><?= __('Cif') ?></th>
                            <th><?= __('Gestion Actual') ?></th>
                            <th><?= __('Email Centro') ?></th>
                            <th><?= __('Contacto1 Cargo') ?></th>
                            <th><?= __('Contacto1 Nom Tfno') ?></th>
                            <th><?= __('Contacto1 Mail') ?></th>
                            <th><?= __('Contacto2 Cargo') ?></th>
                            <th><?= __('Contacto2 Nom Tfno') ?></th>
                            <th><?= __('Contacto2 Mail') ?></th>
                            <th><?= __('Contacto3 Datos') ?></th>
                            <th><?= __('Matinal') ?></th>
                            <th><?= __('Mediodia') ?></th>
                            <th><?= __('J Continua') ?></th>
                            <th><?= __('Tardes') ?></th>
                            <th><?= __('Jun Sept') ?></th>
                            <th><?= __('Vacacionales') ?></th>
                            <th><?= __('Plant Comercial') ?></th>
                            <th><?= __('Historial Citas Observ') ?></th>
                            <th><?= __('Ini Cto') ?></th>
                            <th><?= __('Ini Cto Agente') ?></th>
                            <th><?= __('Fin Cto') ?></th>
                            <th><?= __('Fin Cto Agente') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Empresados Id') ?></th>
                            <th><?= __('Empresatres Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($agente->comercials as $comercial) : ?>
                        <tr>
                            <td><?= h($comercial->id) ?></td>
                            <td><?= h($comercial->codigo) ?></td>
                            <td><?= h($comercial->nom_centro) ?></td>
                            <td><?= h($comercial->localidad) ?></td>
                            <td><?= h($comercial->estado) ?></td>
                            <td><?= h($comercial->jornada) ?></td>
                            <td><?= h($comercial->pax) ?></td>
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
                            <td><?= h($comercial->plant_comercial) ?></td>
                            <td><?= h($comercial->historial_citas_observ) ?></td>
                            <td><?= h($comercial->ini_cto) ?></td>
                            <td><?= h($comercial->ini_cto_agente) ?></td>
                            <td><?= h($comercial->fin_cto) ?></td>
                            <td><?= h($comercial->fin_cto_agente) ?></td>
                            <td><?= h($comercial->empresa_id) ?></td>
                            <td><?= h($comercial->empresados_id) ?></td>
                            <td><?= h($comercial->empresatres_id) ?></td>
                            <td><?= h($comercial->created) ?></td>
                            <td><?= h($comercial->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Comercials', 'action' => 'view', $comercial->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Comercials', 'action' => 'edit', $comercial->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Comercials', 'action' => 'delete', $comercial->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $comercial->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>