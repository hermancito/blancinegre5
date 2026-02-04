<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('photo_dir') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('apellidos') ?></th>
                    <th><?= $this->Paginator->sort('tfno1') ?></th>
                    <th><?= $this->Paginator->sort('tfno2') ?></th>
                    <th><?= $this->Paginator->sort('nif') ?></th>
                    <th><?= $this->Paginator->sort('validado') ?></th>
                    <th><?= $this->Paginator->sort('bolsa') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('datos') ?></th>
                    <th><?= $this->Paginator->sort('info_mail') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th><?= $this->Paginator->sort('seg_soc') ?></th>
                    <th><?= $this->Paginator->sort('iban') ?></th>
                    <th><?= $this->Paginator->sort('cuenta') ?></th>
                    <th><?= $this->Paginator->sort('direccion') ?></th>
                    <th><?= $this->Paginator->sort('poblacion') ?></th>
                    <th><?= $this->Paginator->sort('cod_postal') ?></th>
                    <th><?= $this->Paginator->sort('contrato') ?></th>
                    <th><?= $this->Paginator->sort('fecha_ant') ?></th>
                    <th><?= $this->Paginator->sort('carnet_cond') ?></th>
                    <th><?= $this->Paginator->sort('vehiculo') ?></th>
                    <th><?= $this->Paginator->sort('certif_antec') ?></th>
                    <th><?= $this->Paginator->sort('mutua') ?></th>
                    <th><?= $this->Paginator->sort('colegio_id') ?></th>
                    <th><?= $this->Paginator->sort('fecha_nac') ?></th>
                    <th><?= $this->Paginator->sort('token_dispositivo') ?></th>
                    <th><?= $this->Paginator->sort('niv_ingles') ?></th>
                    <th><?= $this->Paginator->sort('niv_valencia') ?></th>
                    <th><?= $this->Paginator->sort('disponib') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->codigo) ?></td>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->photo) ?></td>
                    <td><?= h($user->photo_dir) ?></td>
                    <td><?= h($user->nombre) ?></td>
                    <td><?= h($user->apellidos) ?></td>
                    <td><?= $user->tfno1 === null ? '' : $this->Number->format($user->tfno1) ?></td>
                    <td><?= $user->tfno2 === null ? '' : $this->Number->format($user->tfno2) ?></td>
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
                    <td><?= h($user->certif_antec) ?></td>
                    <td><?= h($user->mutua) ?></td>
                    <td><?= $user->hasValue('colegio') ? $this->Html->link($user->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $user->colegio->id]) : '' ?></td>
                    <td><?= h($user->fecha_nac) ?></td>
                    <td><?= h($user->token_dispositivo) ?></td>
                    <td><?= h($user->niv_ingles) ?></td>
                    <td><?= h($user->niv_valencia) ?></td>
                    <td><?= h($user->disponib) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $user->id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
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