<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notifcolegio $notifcolegio
 */
?>
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?= h('Aviso '),h($notifcolegio->nombre) ?></h3>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th scope="row"><?= h('Nombre aviso') ?></th>
                        <td><?= h($notifcolegio->nombre) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= h('Autor') ?></th>
                        <td><?= $notifcolegio->has('user') ? $this->Html->link($notifcolegio->user->label, ['controller' => 'Users', 'action' => 'view', $notifcolegio->user->id]) : '' ?></td>
                    </tr>

                    <tr>
                        <th scope="row"><?= h('Archivo adjuntado') ?></th>
                        <td><?= $this->Html->link('Ver archivo','../notif_gral/notifcolegios/photo/' . h($notifcolegio->photo_dir) . '/' . h($notifcolegio->photo)); ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= $this->Number->format($notifcolegio->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Created') ?></th>
                        <td><?= h($notifcolegio->created) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Modified') ?></th>
                        <td><?= h($notifcolegio->modified) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= h('Valido') ?></th>
                        <td><?= $notifcolegio->validado ? __('SI') : __('NO'); ?></td>
                    </tr>
                </table>

                <div class="row well">
                    <h4><?= h('Descripción') ?></h4>

                    <p id="parrafo">
                        <?php echo $notifcolegio->descripc;?>
                    </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading col-md-12">
                        <div class="col-md-4">
                            <h3 class="panel-title">Colegios destinatarios</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                    <?php if (!empty($notifcolegio->colegios)): ?>
                        <table class="table table-striped">
                            <tr>
                                <th scope="col"><?= __('Codigo') ?></th>
                                <th scope="col"><?= __('Username') ?></th>
                                <th scope="col"><?= __('Direccion') ?></th>
                                <th scope="col"><?= __('Cp') ?></th>
                                <th scope="col"><?= __('Poblacion') ?></th>
                                <th scope="col"><?= __('Email Centro') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($notifcolegio->colegios as $colegios): ?>
                                <tr>
                                    <td><?= h($colegios->codigo) ?></td>
                                    <td><?= h($colegios->username) ?></td>
                                    <td><?= h($colegios->direccion) ?></td>
                                    <td><?= h($colegios->cp) ?></td>
                                    <td><?= h($colegios->poblacion) ?></td>
                                    <td><?= h($colegios->email_centro) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Colegios', 'action' => 'view', $colegios->id]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('parrafo').replaceAll("\"", "");
</script>
