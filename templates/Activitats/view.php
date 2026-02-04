<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activitat $activitat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitat'), ['action' => 'edit', $activitat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitat'), ['action' => 'delete', $activitat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitats view content">
            <h3><?= h($activitat->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($activitat->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($activitat->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitat->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($activitat->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($activitat->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Alumnos') ?></h4>
                <?php if (!empty($activitat->alumnos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('User2 Id') ?></th>
                            <th><?= __('Coleg Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Nombre Apellidos') ?></th>
                            <th><?= __('Anyo') ?></th>
                            <th><?= __('Tfno') ?></th>
                            <th><?= __('Movil') ?></th>
                            <th><?= __('Activo') ?></th>
                            <th><?= __('Socio') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Cuenta') ?></th>
                            <th><?= __('Iban') ?></th>
                            <th><?= __('Titular') ?></th>
                            <th><?= __('Nif') ?></th>
                            <th><?= __('Cobro') ?></th>
                            <th><?= __('Recibo') ?></th>
                            <th><?= __('Material') ?></th>
                            <th><?= __('Coment Pub') ?></th>
                            <th><?= __('Coment Priv') ?></th>
                            <th><?= __('Ampa') ?></th>
                            <th><?= __('Eliminado') ?></th>
                            <th><?= __('Comedor') ?></th>
                            <th><?= __('Datos') ?></th>
                            <th><?= __('Info Mail') ?></th>
                            <th><?= __('Comodin') ?></th>
                            <th><?= __('Curso') ?></th>
                            <th><?= __('Matricula') ?></th>
                            <th><?= __('No Socio') ?></th>
                            <th><?= __('Suplemento') ?></th>
                            <th><?= __('Dto Fijo') ?></th>
                            <th><?= __('Dto Porcentaje') ?></th>
                            <th><?= __('Suma Pfijo') ?></th>
                            <th><?= __('Suma Pvble') ?></th>
                            <th><?= __('Cuota Previa') ?></th>
                            <th><?= __('Cuota') ?></th>
                            <th><?= __('Nif Alumno') ?></th>
                            <th><?= __('Merito1') ?></th>
                            <th><?= __('Merito2') ?></th>
                            <th><?= __('Merito3') ?></th>
                            <th><?= __('Merito4') ?></th>
                            <th><?= __('Merito5') ?></th>
                            <th><?= __('Ingles 3a') ?></th>
                            <th><?= __('Ingles 4a') ?></th>
                            <th><?= __('Ingles 5a') ?></th>
                            <th><?= __('Ingles G1') ?></th>
                            <th><?= __('Ingles G2') ?></th>
                            <th><?= __('Ingles G3') ?></th>
                            <th><?= __('Ingles G4') ?></th>
                            <th><?= __('Ingles G5') ?></th>
                            <th><?= __('Ingles G6') ?></th>
                            <th><?= __('Ingles G7') ?></th>
                            <th><?= __('Ingles G8') ?></th>
                            <th><?= __('Ingles G9') ?></th>
                            <th><?= __('Impago') ?></th>
                            <th><?= __('Texto Impago') ?></th>
                            <th><?= __('Sip') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->alumnos as $alumno) : ?>
                        <tr>
                            <td><?= h($alumno->id) ?></td>
                            <td><?= h($alumno->user_id) ?></td>
                            <td><?= h($alumno->user2_id) ?></td>
                            <td><?= h($alumno->coleg_id) ?></td>
                            <td><?= h($alumno->codigo) ?></td>
                            <td><?= h($alumno->nombre_apellidos) ?></td>
                            <td><?= h($alumno->anyo) ?></td>
                            <td><?= h($alumno->tfno) ?></td>
                            <td><?= h($alumno->movil) ?></td>
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
                            <td><?= h($alumno->recibo) ?></td>
                            <td><?= h($alumno->material) ?></td>
                            <td><?= h($alumno->coment_pub) ?></td>
                            <td><?= h($alumno->coment_priv) ?></td>
                            <td><?= h($alumno->ampa) ?></td>
                            <td><?= h($alumno->eliminado) ?></td>
                            <td><?= h($alumno->comedor) ?></td>
                            <td><?= h($alumno->datos) ?></td>
                            <td><?= h($alumno->info_mail) ?></td>
                            <td><?= h($alumno->comodin) ?></td>
                            <td><?= h($alumno->curso) ?></td>
                            <td><?= h($alumno->matricula) ?></td>
                            <td><?= h($alumno->no_socio) ?></td>
                            <td><?= h($alumno->suplemento) ?></td>
                            <td><?= h($alumno->dto_fijo) ?></td>
                            <td><?= h($alumno->dto_porcentaje) ?></td>
                            <td><?= h($alumno->suma_pfijo) ?></td>
                            <td><?= h($alumno->suma_pvble) ?></td>
                            <td><?= h($alumno->cuota_previa) ?></td>
                            <td><?= h($alumno->cuota) ?></td>
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
                                <?= $this->Html->link(__('View'), ['controller' => 'Alumnos', 'action' => 'view', $alumno->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Alumnos', 'action' => 'edit', $alumno->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Alumnos', 'action' => 'delete', $alumno->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $alumno->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Colegios') ?></h4>
                <?php if (!empty($activitat->colegios)) : ?>
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
                            <th><?= __('Tablaspreciosvble Id') ?></th>
                            <th><?= __('Suplemento Nosocios') ?></th>
                            <th><?= __('Porcentaje Nosocios') ?></th>
                            <th><?= __('Mostrar Cuota') ?></th>
                            <th><?= __('Dcto Hermanos') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->colegios as $colegio) : ?>
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
                            <td><?= h($colegio->tablaspreciosvble_id) ?></td>
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
            <div class="related">
                <h4><?= __('Related Dias') ?></h4>
                <?php if (!empty($activitat->dias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->dias as $dia) : ?>
                        <tr>
                            <td><?= h($dia->id) ?></td>
                            <td><?= h($dia->nombre) ?></td>
                            <td><?= h($dia->descripc) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dias', 'action' => 'view', $dia->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dias', 'action' => 'edit', $dia->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Dias', 'action' => 'delete', $dia->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $dia->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Monitors') ?></h4>
                <?php if (!empty($activitat->monitors)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Apellidos') ?></th>
                            <th><?= __('Poblacion') ?></th>
                            <th><?= __('Tfno1') ?></th>
                            <th><?= __('Tfno2') ?></th>
                            <th><?= __('Nif') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Bolsa') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->monitors as $monitor) : ?>
                        <tr>
                            <td><?= h($monitor->id) ?></td>
                            <td><?= h($monitor->codigo) ?></td>
                            <td><?= h($monitor->username) ?></td>
                            <td><?= h($monitor->email) ?></td>
                            <td><?= h($monitor->nombre) ?></td>
                            <td><?= h($monitor->apellidos) ?></td>
                            <td><?= h($monitor->poblacion) ?></td>
                            <td><?= h($monitor->tfno1) ?></td>
                            <td><?= h($monitor->tfno2) ?></td>
                            <td><?= h($monitor->nif) ?></td>
                            <td><?= h($monitor->validado) ?></td>
                            <td><?= h($monitor->bolsa) ?></td>
                            <td><?= h($monitor->created) ?></td>
                            <td><?= h($monitor->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Monitors', 'action' => 'view', $monitor->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Monitors', 'action' => 'edit', $monitor->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Monitors', 'action' => 'delete', $monitor->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $monitor->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Registroaltas') ?></h4>
                <?php if (!empty($activitat->registroaltas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
                            <th><?= __('Importe') ?></th>
                            <th><?= __('Concepto') ?></th>
                            <th><?= __('Alta Amplia') ?></th>
                            <th><?= __('Material') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Fecha Alta') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->registroaltas as $registroalta) : ?>
                        <tr>
                            <td><?= h($registroalta->id) ?></td>
                            <td><?= h($registroalta->colegio_id) ?></td>
                            <td><?= h($registroalta->alumno_id) ?></td>
                            <td><?= h($registroalta->importe) ?></td>
                            <td><?= h($registroalta->concepto) ?></td>
                            <td><?= h($registroalta->alta_amplia) ?></td>
                            <td><?= h($registroalta->material) ?></td>
                            <td><?= h($registroalta->observ) ?></td>
                            <td><?= h($registroalta->fecha_alta) ?></td>
                            <td><?= h($registroalta->created) ?></td>
                            <td><?= h($registroalta->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Registroaltas', 'action' => 'view', $registroalta->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Registroaltas', 'action' => 'edit', $registroalta->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Registroaltas', 'action' => 'delete', $registroalta->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $registroalta->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($activitat->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Photo Dir') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Apellidos') ?></th>
                            <th><?= __('Tfno1') ?></th>
                            <th><?= __('Tfno2') ?></th>
                            <th><?= __('Nif') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Bolsa') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Datos') ?></th>
                            <th><?= __('Info Mail') ?></th>
                            <th><?= __('Sexo') ?></th>
                            <th><?= __('Seg Soc') ?></th>
                            <th><?= __('Iban') ?></th>
                            <th><?= __('Cuenta') ?></th>
                            <th><?= __('Direccion') ?></th>
                            <th><?= __('Poblacion') ?></th>
                            <th><?= __('Cod Postal') ?></th>
                            <th><?= __('Contrato') ?></th>
                            <th><?= __('Fecha Ant') ?></th>
                            <th><?= __('Carnet Cond') ?></th>
                            <th><?= __('Vehiculo') ?></th>
                            <th><?= __('Titulaciones') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Certif Antec') ?></th>
                            <th><?= __('Mutua') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Token') ?></th>
                            <th><?= __('Fecha Nac') ?></th>
                            <th><?= __('Token Dispositivo') ?></th>
                            <th><?= __('Niv Ingles') ?></th>
                            <th><?= __('Niv Valencia') ?></th>
                            <th><?= __('Disponib') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->codigo) ?></td>
                            <td><?= h($user->username) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->photo) ?></td>
                            <td><?= h($user->photo_dir) ?></td>
                            <td><?= h($user->nombre) ?></td>
                            <td><?= h($user->apellidos) ?></td>
                            <td><?= h($user->tfno1) ?></td>
                            <td><?= h($user->tfno2) ?></td>
                            <td><?= h($user->nif) ?></td>
                            <td><?= h($user->validado) ?></td>
                            <td><?= h($user->bolsa) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td><?= h($user->datos) ?></td>
                            <td><?= h($user->info_mail) ?></td>
                            <td><?= h($user->sexo) ?></td>
                            <td><?= h($user->seg_soc) ?></td>
                            <td><?= h($user->iban) ?></td>
                            <td><?= h($user->cuenta) ?></td>
                            <td><?= h($user->direccion) ?></td>
                            <td><?= h($user->poblacion) ?></td>
                            <td><?= h($user->cod_postal) ?></td>
                            <td><?= h($user->contrato) ?></td>
                            <td><?= h($user->fecha_ant) ?></td>
                            <td><?= h($user->carnet_cond) ?></td>
                            <td><?= h($user->vehiculo) ?></td>
                            <td><?= h($user->titulaciones) ?></td>
                            <td><?= h($user->observ) ?></td>
                            <td><?= h($user->certif_antec) ?></td>
                            <td><?= h($user->mutua) ?></td>
                            <td><?= h($user->colegio_id) ?></td>
                            <td><?= h($user->token) ?></td>
                            <td><?= h($user->fecha_nac) ?></td>
                            <td><?= h($user->token_dispositivo) ?></td>
                            <td><?= h($user->niv_ingles) ?></td>
                            <td><?= h($user->niv_valencia) ?></td>
                            <td><?= h($user->disponib) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Users', 'action' => 'delete', $user->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Activitatsgrups') ?></h4>
                <?php if (!empty($activitat->activitatsgrups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Aula') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comentarios') ?></th>
                            <th><?= __('Tipo Fijo') ?></th>
                            <th><?= __('Tipo Vble') ?></th>
                            <th><?= __('Sala Fijo') ?></th>
                            <th><?= __('Sala Vble') ?></th>
                            <th><?= __('Visible Familias') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Aplicar Jornada') ?></th>
                            <th><?= __('Alum Min') ?></th>
                            <th><?= __('Alum Max') ?></th>
                            <th><?= __('Fecha Inicio') ?></th>
                            <th><?= __('Fecha Fin') ?></th>
                            <th><?= __('Matricula') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->activitatsgrups as $activitatsgrup) : ?>
                        <tr>
                            <td><?= h($activitatsgrup->id) ?></td>
                            <td><?= h($activitatsgrup->codigo) ?></td>
                            <td><?= h($activitatsgrup->colegio_id) ?></td>
                            <td><?= h($activitatsgrup->aula) ?></td>
                            <td><?= h($activitatsgrup->created) ?></td>
                            <td><?= h($activitatsgrup->modified) ?></td>
                            <td><?= h($activitatsgrup->comentarios) ?></td>
                            <td><?= h($activitatsgrup->tipo_fijo) ?></td>
                            <td><?= h($activitatsgrup->tipo_vble) ?></td>
                            <td><?= h($activitatsgrup->sala_fijo) ?></td>
                            <td><?= h($activitatsgrup->sala_vble) ?></td>
                            <td><?= h($activitatsgrup->visible_familias) ?></td>
                            <td><?= h($activitatsgrup->descripc) ?></td>
                            <td><?= h($activitatsgrup->aplicar_jornada) ?></td>
                            <td><?= h($activitatsgrup->alum_min) ?></td>
                            <td><?= h($activitatsgrup->alum_max) ?></td>
                            <td><?= h($activitatsgrup->fecha_inicio) ?></td>
                            <td><?= h($activitatsgrup->fecha_fin) ?></td>
                            <td><?= h($activitatsgrup->matricula) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrup->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Activitatsgrups', 'action' => 'edit', $activitatsgrup->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Activitatsgrups', 'action' => 'delete', $activitatsgrup->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrup->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Notas') ?></h4>
                <?php if (!empty($activitat->notas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
                            <th><?= __('Comodin') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Cuatrim') ?></th>
                            <th><?= __('Anyo') ?></th>
                            <th><?= __('Curso') ?></th>
                            <th><?= __('Objetivos') ?></th>
                            <th><?= __('Contenidos') ?></th>
                            <th><?= __('Atencion') ?></th>
                            <th><?= __('Participa') ?></th>
                            <th><?= __('Ejerc') ?></th>
                            <th><?= __('Asist') ?></th>
                            <th><?= __('Actitud') ?></th>
                            <th><?= __('Respeto') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Comentarios Boletin') ?></th>
                            <th><?= __('Contenidos Boletin') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->notas as $nota) : ?>
                        <tr>
                            <td><?= h($nota->id) ?></td>
                            <td><?= h($nota->alumno_id) ?></td>
                            <td><?= h($nota->comodin) ?></td>
                            <td><?= h($nota->user_id) ?></td>
                            <td><?= h($nota->cuatrim) ?></td>
                            <td><?= h($nota->anyo) ?></td>
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
                            <td><?= h($nota->comentarios_boletin) ?></td>
                            <td><?= h($nota->contenidos_boletin) ?></td>
                            <td><?= h($nota->created) ?></td>
                            <td><?= h($nota->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notas', 'action' => 'view', $nota->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notas', 'action' => 'edit', $nota->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Notas', 'action' => 'delete', $nota->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $nota->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Notificacions') ?></h4>
                <?php if (!empty($activitat->notificacions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Photo Dir') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->notificacions as $notificacion) : ?>
                        <tr>
                            <td><?= h($notificacion->id) ?></td>
                            <td><?= h($notificacion->user_id) ?></td>
                            <td><?= h($notificacion->colegio_id) ?></td>
                            <td><?= h($notificacion->nombre) ?></td>
                            <td><?= h($notificacion->descripc) ?></td>
                            <td><?= h($notificacion->photo) ?></td>
                            <td><?= h($notificacion->photo_dir) ?></td>
                            <td><?= h($notificacion->validado) ?></td>
                            <td><?= h($notificacion->created) ?></td>
                            <td><?= h($notificacion->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notificacions', 'action' => 'view', $notificacion->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notificacions', 'action' => 'edit', $notificacion->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Notificacions', 'action' => 'delete', $notificacion->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $notificacion->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Sustitucions') ?></h4>
                <?php if (!empty($activitat->sustitucions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Hora Ini') ?></th>
                            <th><?= __('Hora Fin') ?></th>
                            <th><?= __('Monitor Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Coste') ?></th>
                            <th><?= __('Justificada') ?></th>
                            <th><?= __('Motivo') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Salario') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comodin1') ?></th>
                            <th><?= __('Comodin2') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($activitat->sustitucions as $sustitucion) : ?>
                        <tr>
                            <td><?= h($sustitucion->id) ?></td>
                            <td><?= h($sustitucion->fecha) ?></td>
                            <td><?= h($sustitucion->hora_ini) ?></td>
                            <td><?= h($sustitucion->hora_fin) ?></td>
                            <td><?= h($sustitucion->monitor_id) ?></td>
                            <td><?= h($sustitucion->colegio_id) ?></td>
                            <td><?= h($sustitucion->coste) ?></td>
                            <td><?= h($sustitucion->justificada) ?></td>
                            <td><?= h($sustitucion->motivo) ?></td>
                            <td><?= h($sustitucion->user_id) ?></td>
                            <td><?= h($sustitucion->salario) ?></td>
                            <td><?= h($sustitucion->created) ?></td>
                            <td><?= h($sustitucion->modified) ?></td>
                            <td><?= h($sustitucion->comodin1) ?></td>
                            <td><?= h($sustitucion->comodin2) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Sustitucions', 'action' => 'view', $sustitucion->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Sustitucions', 'action' => 'edit', $sustitucion->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Sustitucions', 'action' => 'delete', $sustitucion->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $sustitucion->id),
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