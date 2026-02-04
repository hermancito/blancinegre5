<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Destino $destino
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Destino'), ['action' => 'edit', $destino->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Destino'), ['action' => 'delete', $destino->id], ['confirm' => __('Are you sure you want to delete # {0}?', $destino->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Destinos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Destino'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="destinos view content">
            <h3><?= h($destino->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($destino->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($destino->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($destino->users)) : ?>
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
                        <?php foreach ($destino->users as $user) : ?>
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
        </div>
    </div>
</div>