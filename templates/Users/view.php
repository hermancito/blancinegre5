<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->email) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($user->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($user->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo Dir') ?></th>
                    <td><?= h($user->photo_dir) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($user->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Apellidos') ?></th>
                    <td><?= h($user->apellidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nif') ?></th>
                    <td><?= h($user->nif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($user->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seg Soc') ?></th>
                    <td><?= h($user->seg_soc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iban') ?></th>
                    <td><?= h($user->iban) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cuenta') ?></th>
                    <td><?= h($user->cuenta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Direccion') ?></th>
                    <td><?= h($user->direccion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poblacion') ?></th>
                    <td><?= h($user->poblacion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cod Postal') ?></th>
                    <td><?= h($user->cod_postal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contrato') ?></th>
                    <td><?= h($user->contrato) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vehiculo') ?></th>
                    <td><?= h($user->vehiculo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $user->hasValue('colegio') ? $this->Html->link($user->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $user->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Token Dispositivo') ?></th>
                    <td><?= h($user->token_dispositivo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Niv Ingles') ?></th>
                    <td><?= h($user->niv_ingles) ?></td>
                </tr>
                <tr>
                    <th><?= __('Niv Valencia') ?></th>
                    <td><?= h($user->niv_valencia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Disponib') ?></th>
                    <td><?= h($user->disponib) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno1') ?></th>
                    <td><?= $user->tfno1 === null ? '' : $this->Number->format($user->tfno1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tfno2') ?></th>
                    <td><?= $user->tfno2 === null ? '' : $this->Number->format($user->tfno2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Ant') ?></th>
                    <td><?= h($user->fecha_ant) ?></td>
                </tr>
                <tr>
                    <th><?= __('Certif Antec') ?></th>
                    <td><?= h($user->certif_antec) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mutua') ?></th>
                    <td><?= h($user->mutua) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Nac') ?></th>
                    <td><?= h($user->fecha_nac) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validado') ?></th>
                    <td><?= $user->validado ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Bolsa') ?></th>
                    <td><?= $user->bolsa ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Datos') ?></th>
                    <td><?= $user->datos ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Info Mail') ?></th>
                    <td><?= $user->info_mail ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Carnet Cond') ?></th>
                    <td><?= $user->carnet_cond ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Titulaciones') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->titulaciones)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->observ)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Activitats') ?></h4>
                <?php if (!empty($user->activitats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->activitats as $activitat) : ?>
                        <tr>
                            <td><?= h($activitat->id) ?></td>
                            <td><?= h($activitat->nombre) ?></td>
                            <td><?= h($activitat->codigo) ?></td>
                            <td><?= h($activitat->created) ?></td>
                            <td><?= h($activitat->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Activitats', 'action' => 'view', $activitat->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Activitats', 'action' => 'edit', $activitat->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Activitats', 'action' => 'delete', $activitat->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $activitat->id),
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
                <h4><?= __('Related Destinos') ?></h4>
                <?php if (!empty($user->destinos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->destinos as $destino) : ?>
                        <tr>
                            <td><?= h($destino->id) ?></td>
                            <td><?= h($destino->nombre) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Destinos', 'action' => 'view', $destino->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Destinos', 'action' => 'edit', $destino->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Destinos', 'action' => 'delete', $destino->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $destino->id),
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
                <h4><?= __('Related Roles') ?></h4>
                <?php if (!empty($user->roles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->roles as $role) : ?>
                        <tr>
                            <td><?= h($role->id) ?></td>
                            <td><?= h($role->name) ?></td>
                            <td><?= h($role->description) ?></td>
                            <td><?= h($role->created) ?></td>
                            <td><?= h($role->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $role->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $role->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Roles', 'action' => 'delete', $role->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $role->id),
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
                <h4><?= __('Related Alumnos') ?></h4>
                <?php if (!empty($user->alumnos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
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
                        <?php foreach ($user->alumnos as $alumno) : ?>
                        <tr>
                            <td><?= h($alumno->id) ?></td>
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
                <h4><?= __('Related Notas') ?></h4>
                <?php if (!empty($user->notas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
                            <th><?= __('Comodin') ?></th>
                            <th><?= __('Activitat Id') ?></th>
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
                        <?php foreach ($user->notas as $nota) : ?>
                        <tr>
                            <td><?= h($nota->id) ?></td>
                            <td><?= h($nota->alumno_id) ?></td>
                            <td><?= h($nota->comodin) ?></td>
                            <td><?= h($nota->activitat_id) ?></td>
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
                <?php if (!empty($user->notificacions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Activitat Id') ?></th>
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
                        <?php foreach ($user->notificacions as $notificacion) : ?>
                        <tr>
                            <td><?= h($notificacion->id) ?></td>
                            <td><?= h($notificacion->activitat_id) ?></td>
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
                <h4><?= __('Related Salarios') ?></h4>
                <?php if (!empty($user->salarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Sala Fijo') ?></th>
                            <th><?= __('Sala Vble') ?></th>
                            <th><?= __('Plus Var') ?></th>
                            <th><?= __('Complemento') ?></th>
                            <th><?= __('Dietas') ?></th>
                            <th><?= __('Eventos') ?></th>
                            <th><?= __('It') ?></th>
                            <th><?= __('Absentismo') ?></th>
                            <th><?= __('Dto') ?></th>
                            <th><?= __('Nomina') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->salarios as $salario) : ?>
                        <tr>
                            <td><?= h($salario->id) ?></td>
                            <td><?= h($salario->sala_fijo) ?></td>
                            <td><?= h($salario->sala_vble) ?></td>
                            <td><?= h($salario->plus_var) ?></td>
                            <td><?= h($salario->complemento) ?></td>
                            <td><?= h($salario->dietas) ?></td>
                            <td><?= h($salario->eventos) ?></td>
                            <td><?= h($salario->it) ?></td>
                            <td><?= h($salario->absentismo) ?></td>
                            <td><?= h($salario->dto) ?></td>
                            <td><?= h($salario->nomina) ?></td>
                            <td><?= h($salario->created) ?></td>
                            <td><?= h($salario->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Salarios', 'action' => 'view', $salario->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Salarios', 'action' => 'edit', $salario->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Salarios', 'action' => 'delete', $salario->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $salario->id),
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
                <h4><?= __('Related Alumnos Xml') ?></h4>
                <?php if (!empty($user->alumnos_xml)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Xmlfile') ?></th>
                            <th><?= __('Xmlfile Dir') ?></th>
                            <th><?= __('Grabado') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->alumnos_xml as $alumnosXml) : ?>
                        <tr>
                            <td><?= h($alumnosXml->id) ?></td>
                            <td><?= h($alumnosXml->colegio_id) ?></td>
                            <td><?= h($alumnosXml->xmlfile) ?></td>
                            <td><?= h($alumnosXml->xmlfile_dir) ?></td>
                            <td><?= h($alumnosXml->grabado) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AlumnosXml', 'action' => 'view', $alumnosXml->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AlumnosXml', 'action' => 'edit', $alumnosXml->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'AlumnosXml', 'action' => 'delete', $alumnosXml->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $alumnosXml->id),
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
                <h4><?= __('Related Notificacionpdfs') ?></h4>
                <?php if (!empty($user->notificacionpdfs)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Notificacion Id') ?></th>
                            <th><?= __('Pdf') ?></th>
                            <th><?= __('Pdf Dir') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->notificacionpdfs as $notificacionpdf) : ?>
                        <tr>
                            <td><?= h($notificacionpdf->id) ?></td>
                            <td><?= h($notificacionpdf->notificacion_id) ?></td>
                            <td><?= h($notificacionpdf->pdf) ?></td>
                            <td><?= h($notificacionpdf->pdf_dir) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Notificacionpdfs', 'action' => 'view', $notificacionpdf->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Notificacionpdfs', 'action' => 'edit', $notificacionpdf->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Notificacionpdfs', 'action' => 'delete', $notificacionpdf->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $notificacionpdf->id),
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
                <h4><?= __('Related Colegiofiles') ?></h4>
                <?php if (!empty($user->colegiofiles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('File Dir') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->colegiofiles as $colegiofile) : ?>
                        <tr>
                            <td><?= h($colegiofile->id) ?></td>
                            <td><?= h($colegiofile->colegio_id) ?></td>
                            <td><?= h($colegiofile->file) ?></td>
                            <td><?= h($colegiofile->file_dir) ?></td>
                            <td><?= h($colegiofile->created) ?></td>
                            <td><?= h($colegiofile->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Colegiofiles', 'action' => 'view', $colegiofile->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Colegiofiles', 'action' => 'edit', $colegiofile->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Colegiofiles', 'action' => 'delete', $colegiofile->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $colegiofile->id),
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
                <h4><?= __('Related Colegiofilesfamilias') ?></h4>
                <?php if (!empty($user->colegiofilesfamilias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('File Dir') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->colegiofilesfamilias as $colegiofilesfamilia) : ?>
                        <tr>
                            <td><?= h($colegiofilesfamilia->id) ?></td>
                            <td><?= h($colegiofilesfamilia->user_id) ?></td>
                            <td><?= h($colegiofilesfamilia->file) ?></td>
                            <td><?= h($colegiofilesfamilia->file_dir) ?></td>
                            <td><?= h($colegiofilesfamilia->created) ?></td>
                            <td><?= h($colegiofilesfamilia->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Colegiofilesfamilias', 'action' => 'view', $colegiofilesfamilia->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Colegiofilesfamilias', 'action' => 'edit', $colegiofilesfamilia->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Colegiofilesfamilias', 'action' => 'delete', $colegiofilesfamilia->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $colegiofilesfamilia->id),
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
                <h4><?= __('Related Coordinadorsfiles') ?></h4>
                <?php if (!empty($user->coordinadorsfiles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('File Dir') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->coordinadorsfiles as $coordinadorsfile) : ?>
                        <tr>
                            <td><?= h($coordinadorsfile->id) ?></td>
                            <td><?= h($coordinadorsfile->user_id) ?></td>
                            <td><?= h($coordinadorsfile->file) ?></td>
                            <td><?= h($coordinadorsfile->file_dir) ?></td>
                            <td><?= h($coordinadorsfile->created) ?></td>
                            <td><?= h($coordinadorsfile->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Coordinadorsfiles', 'action' => 'view', $coordinadorsfile->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Coordinadorsfiles', 'action' => 'edit', $coordinadorsfile->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Coordinadorsfiles', 'action' => 'delete', $coordinadorsfile->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $coordinadorsfile->id),
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
                <h4><?= __('Related Monitorsfiles') ?></h4>
                <?php if (!empty($user->monitorsfiles)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('File') ?></th>
                            <th><?= __('File Dir') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Todos Monit') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->monitorsfiles as $monitorsfile) : ?>
                        <tr>
                            <td><?= h($monitorsfile->id) ?></td>
                            <td><?= h($monitorsfile->user_id) ?></td>
                            <td><?= h($monitorsfile->file) ?></td>
                            <td><?= h($monitorsfile->file_dir) ?></td>
                            <td><?= h($monitorsfile->created) ?></td>
                            <td><?= h($monitorsfile->modified) ?></td>
                            <td><?= h($monitorsfile->todos_monit) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Monitorsfiles', 'action' => 'view', $monitorsfile->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Monitorsfiles', 'action' => 'edit', $monitorsfile->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Monitorsfiles', 'action' => 'delete', $monitorsfile->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $monitorsfile->id),
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
                <h4><?= __('Related Boletines') ?></h4>
                <?php if (!empty($user->boletines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nota Id') ?></th>
                            <th><?= __('Alumno Id') ?></th>
                            <th><?= __('Notas Alumno') ?></th>
                            <th><?= __('Contenidos') ?></th>
                            <th><?= __('Validado') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->boletines as $boletine) : ?>
                        <tr>
                            <td><?= h($boletine->id) ?></td>
                            <td><?= h($boletine->nota_id) ?></td>
                            <td><?= h($boletine->alumno_id) ?></td>
                            <td><?= h($boletine->notas_alumno) ?></td>
                            <td><?= h($boletine->contenidos) ?></td>
                            <td><?= h($boletine->validado) ?></td>
                            <td><?= h($boletine->created) ?></td>
                            <td><?= h($boletine->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Boletines', 'action' => 'view', $boletine->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Boletines', 'action' => 'edit', $boletine->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Boletines', 'action' => 'delete', $boletine->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $boletine->id),
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
                <?php if (!empty($user->sustitucions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Fecha') ?></th>
                            <th><?= __('Hora Ini') ?></th>
                            <th><?= __('Hora Fin') ?></th>
                            <th><?= __('Monitor Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Activitat Id') ?></th>
                            <th><?= __('Coste') ?></th>
                            <th><?= __('Justificada') ?></th>
                            <th><?= __('Motivo') ?></th>
                            <th><?= __('Salario') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comodin1') ?></th>
                            <th><?= __('Comodin2') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->sustitucions as $sustitucion) : ?>
                        <tr>
                            <td><?= h($sustitucion->id) ?></td>
                            <td><?= h($sustitucion->fecha) ?></td>
                            <td><?= h($sustitucion->hora_ini) ?></td>
                            <td><?= h($sustitucion->hora_fin) ?></td>
                            <td><?= h($sustitucion->monitor_id) ?></td>
                            <td><?= h($sustitucion->colegio_id) ?></td>
                            <td><?= h($sustitucion->activitat_id) ?></td>
                            <td><?= h($sustitucion->coste) ?></td>
                            <td><?= h($sustitucion->justificada) ?></td>
                            <td><?= h($sustitucion->motivo) ?></td>
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
            <div class="related">
                <h4><?= __('Related Eventos') ?></h4>
                <?php if (!empty($user->eventos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Dia') ?></th>
                            <th><?= __('Hora Ini') ?></th>
                            <th><?= __('Hora Fin') ?></th>
                            <th><?= __('Destino') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Retribucion') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comodin1') ?></th>
                            <th><?= __('Comodin2') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->eventos as $evento) : ?>
                        <tr>
                            <td><?= h($evento->id) ?></td>
                            <td><?= h($evento->user_id) ?></td>
                            <td><?= h($evento->dia) ?></td>
                            <td><?= h($evento->hora_ini) ?></td>
                            <td><?= h($evento->hora_fin) ?></td>
                            <td><?= h($evento->destino) ?></td>
                            <td><?= h($evento->observ) ?></td>
                            <td><?= h($evento->retribucion) ?></td>
                            <td><?= h($evento->created) ?></td>
                            <td><?= h($evento->modified) ?></td>
                            <td><?= h($evento->comodin1) ?></td>
                            <td><?= h($evento->comodin2) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Eventos', 'action' => 'view', $evento->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Eventos', 'action' => 'edit', $evento->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Eventos', 'action' => 'delete', $evento->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $evento->id),
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
                <h4><?= __('Related Personalcontrols') ?></h4>
                <?php if (!empty($user->personalcontrols)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Tipoincidencia Id') ?></th>
                            <th><?= __('Actor Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comodin1') ?></th>
                            <th><?= __('Comodin2') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->personalcontrols as $personalcontrol) : ?>
                        <tr>
                            <td><?= h($personalcontrol->id) ?></td>
                            <td><?= h($personalcontrol->user_id) ?></td>
                            <td><?= h($personalcontrol->tipoincidencia_id) ?></td>
                            <td><?= h($personalcontrol->actor_id) ?></td>
                            <td><?= h($personalcontrol->colegio_id) ?></td>
                            <td><?= h($personalcontrol->descripc) ?></td>
                            <td><?= h($personalcontrol->created) ?></td>
                            <td><?= h($personalcontrol->modified) ?></td>
                            <td><?= h($personalcontrol->comodin1) ?></td>
                            <td><?= h($personalcontrol->comodin2) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Personalcontrols', 'action' => 'view', $personalcontrol->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Personalcontrols', 'action' => 'edit', $personalcontrol->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Personalcontrols', 'action' => 'delete', $personalcontrol->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $personalcontrol->id),
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