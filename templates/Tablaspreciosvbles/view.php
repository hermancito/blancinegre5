<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tablaspreciosvble $tablaspreciosvble
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tablaspreciosvble'), ['action' => 'edit', $tablaspreciosvble->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tablaspreciosvble'), ['action' => 'delete', $tablaspreciosvble->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablaspreciosvble->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tablaspreciosvbles'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tablaspreciosvble'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tablaspreciosvbles view content">
            <h3><?= h($tablaspreciosvble->nombre_tabla) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre Tabla') ?></th>
                    <td><?= h($tablaspreciosvble->nombre_tabla) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora1') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora1 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora1_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora2') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora2 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora2_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora3') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora3) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora3 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora3_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora4') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora4) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora4 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora4_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora5') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora5) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora5 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora5_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora6') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora6) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora6 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora6_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora7') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora7) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora7 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora7_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora8') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora8) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora8 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora8_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora9') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora9) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora9 Media') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora9_media) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora10') ?></th>
                    <td><?= $this->Number->format($tablaspreciosvble->hora10) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tablaspreciosvble->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tablaspreciosvble->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Colegios') ?></h4>
                <?php if (!empty($tablaspreciosvble->colegios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Cp') ?></th>
                            <th><?= __('Poblacion') ?></th>
                            <th><?= __('Eq Directivo') ?></th>
                            <th><?= __('Tfno Eqdirect') ?></th>
                            <th><?= __('Email Eqdirectivo') ?></th>
                            <th><?= __('Pdte Ampa') ?></th>
                            <th><?= __('Tfno Pdte') ?></th>
                            <th><?= __('Email Pdte') ?></th>
                            <th><?= __('Resp Act') ?></th>
                            <th><?= __('Tfno Resp') ?></th>
                            <th><?= __('Email Resp') ?></th>
                            <th><?= __('Conserge') ?></th>
                            <th><?= __('Tfno Conserge') ?></th>
                            <th><?= __('Email Conserge') ?></th>
                            <th><?= __('Email Centro') ?></th>
                            <th><?= __('Cif Centro') ?></th>
                            <th><?= __('Email Ampa') ?></th>
                            <th><?= __('Cif Ampa') ?></th>
                            <th><?= __('Cesion Llaves') ?></th>
                            <th><?= __('Unidades Llaves') ?></th>
                            <th><?= __('Alarma') ?></th>
                            <th><?= __('Iban Centro') ?></th>
                            <th><?= __('Iban Ampa') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Suplemento Nosocios') ?></th>
                            <th><?= __('Porcentaje Nosocios') ?></th>
                            <th><?= __('Mostrar Cuota') ?></th>
                            <th><?= __('Dcto Hermanos') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tablaspreciosvble->colegios as $colegio) : ?>
                        <tr>
                            <td><?= h($colegio->id) ?></td>
                            <td><?= h($colegio->codigo) ?></td>
                            <td><?= h($colegio->username) ?></td>
                            <td><?= h($colegio->direccion) ?></td>
                            <td><?= h($colegio->cp) ?></td>
                            <td><?= h($colegio->poblacion) ?></td>
                            <td><?= h($colegio->eq_directivo) ?></td>
                            <td><?= h($colegio->tfno_eqdirect) ?></td>
                            <td><?= h($colegio->email_eqdirectivo) ?></td>
                            <td><?= h($colegio->pdte_ampa) ?></td>
                            <td><?= h($colegio->tfno_pdte) ?></td>
                            <td><?= h($colegio->email_pdte) ?></td>
                            <td><?= h($colegio->resp_act) ?></td>
                            <td><?= h($colegio->tfno_resp) ?></td>
                            <td><?= h($colegio->email_resp) ?></td>
                            <td><?= h($colegio->conserge) ?></td>
                            <td><?= h($colegio->tfno_conserge) ?></td>
                            <td><?= h($colegio->email_conserge) ?></td>
                            <td><?= h($colegio->email_centro) ?></td>
                            <td><?= h($colegio->cif_centro) ?></td>
                            <td><?= h($colegio->email_ampa) ?></td>
                            <td><?= h($colegio->cif_ampa) ?></td>
                            <td><?= h($colegio->cesion_llaves) ?></td>
                            <td><?= h($colegio->unidades_llaves) ?></td>
                            <td><?= h($colegio->alarma) ?></td>
                            <td><?= h($colegio->iban_centro) ?></td>
                            <td><?= h($colegio->iban_ampa) ?></td>
                            <td><?= h($colegio->observ) ?></td>
                            <td><?= h($colegio->created) ?></td>
                            <td><?= h($colegio->modified) ?></td>
                            <td><?= h($colegio->suplemento_nosocios) ?></td>
                            <td><?= h($colegio->porcentaje_nosocios) ?></td>
                            <td><?= h($colegio->mostrar_cuota) ?></td>
                            <td><?= h($colegio->dcto_hermanos) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Colegios', 'action' => 'view', $colegio->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Colegios', 'action' => 'edit', $colegio->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Colegios', 'action' => 'delete', $colegio->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $colegio->id),
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