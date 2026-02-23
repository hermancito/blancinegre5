<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>

<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Actividad: '),h($activitat->nombre) ?></h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <tr>
                    <th scope="row"><?= __('Nombre') ?></th>
                    <td><?= h($activitat->nombre) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Código') ?></th>
                    <td><?= h($activitat->codigo) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitat->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($activitat->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($activitat->modified) ?></td>
                </tr>
            </table>

        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Grupos de esta actividad') ?></h3>
        </div>
        <?php if (!empty($activitat->activitatsgrups)): ?>
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Grupo') ?></th>

                </tr>
                <?php foreach ($activitat->activitatsgrups as $act_grup): ?>
                    <tr>
                        <td><?= h($act_grup->codigo) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Activitatsgrups', 'action' => 'view', $act_grup->id], ['class'=>'btn btn-sm btn-info']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</div>
<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Centros donde se hace la actividad') ?></h3>
        </div>
        <?php if (!empty($activitat->colegios)): ?>
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Código') ?></th>
                    <th scope="col"><?= __('Centro') ?></th>
                    <th scope="col"><?= __('E-mail') ?></th>
                    <th scope="col"><?= __('Dirección') ?></th>
                    <th scope="col"><?= __('C.P') ?></th>
                    <th scope="col"><?= __('Población') ?></th>

                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($activitat->colegios as $colegio): ?>
                    <tr>
                        <td><?= h($colegio->codigo) ?></td>
                        <td><?= h($colegio->username) ?></td>
                        <td><?= h($colegio->email_centro) ?></td>
                        <td><?= h($colegio->direccion) ?></td>
                        <td><?= h($colegio->cp) ?></td>
                        <td><?= h($colegio->poblacion) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Colegios', 'action' => 'view', $colegio->id], ['class'=>'btn btn-sm btn-info']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</div>
<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Monitores en la actividad') ?></h3>
        </div>
        <?php if (!empty($activitat->monitors)): ?>
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Username') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Tfno1') ?></th>
                    <th scope="col"><?= __('Tfno2') ?></th>
                    <th scope="col"><?= __('Nif') ?></th>
                    <th scope="col"><?= __('Validado') ?></th>

                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($activitat->monitors as $monitors): ?>
                    <tr>
                        <td><?= h($monitors->id) ?></td>
                        <td><?= h($monitors->username) ?></td>
                        <td><?= h($monitors->email) ?></td>
                        <td><?= h($monitors->tfno1) ?></td>
                        <td><?= h($monitors->tfno2) ?></td>
                        <td><?= h($monitors->nif) ?></td>
                        <td><?= h($monitors->validado) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Monitors', 'action' => 'view', $monitors->id], ['class'=>'btn btn-sm btn-info']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</div>
<div class="col-md-12">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><?= __('Editores-Visores en la actividad') ?></h3>
        </div>
        <?php if (!empty($activitat->users)): ?>
            <table class="table table-striped">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Username') ?></th>
                    <th scope="col"><?= __('Rol') ?></th>
                    <th scope="col"><?= __('Email') ?></th>
                    <th scope="col"><?= __('Tfno1') ?></th>
                    <th scope="col"><?= __('Tfno2') ?></th>
                    <th scope="col"><?= __('Nif') ?></th>
                    <th scope="col"><?= __('Validado') ?></th>

                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($activitat->users as $user): ?>
                    <tr>
                        <td><?= h($user->id) ?></td>
                        <td><?= h($user->username) ?></td>
                        <?php foreach ($user->roles as $rol): ?>
                            <?php if ($rol->id == 8): ?>
                                <td>Editor actividades</td>
                            <?php elseif ($rol->id == 9): ?>
                                <td>Visor actividades</td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->tfno1) ?></td>
                        <td><?= h($user->tfno2) ?></td>
                        <td><?= h($user->nif) ?></td>
                        <td><?= h($user->validado) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id], ['class'=>'btn btn-sm btn-info']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>

    </div>
</div>
<script>
    var basePath = "<?php echo $this->Url->build([
        "controller" => "Activitats",
        "action" => "obtieneUser"]);
        ; ?>";

    $(document).ready(function(){
        var iduser = $('.monitor').attr("id");
        if (iduser != null){
            $.ajax({
                type: "POST",
                url: basePath,
                data:{
                    id:iduser
                },
                dataType: "json",
                success: function(data){
                    $('#'+iduser).text(data.user.username);

                },
                error: function(){
                    alert('Tenemos problemas!!');
                }
            });
        }

    });


</script>