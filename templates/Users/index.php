<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading col-md-12">
            <div class="col-md-4">
                <h3 class="panel-title">Usuarios</h3>
            </div>
            <div class="col-md-6">
                <?= $this->Form->create($users, ['type' => 'get', 'class'=>'form-inline']) ?>
                <div class="form-group">
                    <?php
                    echo $this->Form->control('PrgSearch', ['label'=>'', 'placeholder' => 'Buscar usuarios']);
                    ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->button(__('Buscar',['action' => 'index'])) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <div class="col-md-2">
                <?= $this->Html->link(__('Excel'), ['action' => 'exportexcel', '_ext'=>'xlsx'], ['class'=>"btn btn-sm btn-success glyphicon glyphicon-save-file"]); ?>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('codigo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('role_id', $title = 'Rol/es') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('apellidos') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('validado') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->codigo) ?></td>
                    <td><?= h($user->username) ?></td>
                    <?php if (!empty($user->roles)): ?>
                    <td><table cellpadding="0" cellspacing="0">
                            <?php foreach ($user->roles as $role): ?>
                            <tr>
                                <td><?= h($role->name) ?> &nbsp</td>
                                <?php endforeach; ?>
                            </tr>
                        </table></td>
                    <?php
                    else:?>
                    <td></td>
                    <?php
                    endif; ?>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->nombre) ?></td>
                    <td><?= h($user->apellidos) ?></td>
                    <td>
                        <?php
                        if(isset($admin_user)) {
                            if ($user->validado == false) {
                                echo $this->Form->button('NO', ['class' => 'btn btn-sm btn-danger cambiaValidoNO', 'id' => $user->id]);
                            } else {
                                echo $this->Form->button('SI', ['class' => 'btn btn-sm btn-success cambiaValidoSI', 'id' => $user->id]);
                            }
                        }else{
                            if ($user->validado == false) {
                                echo 'NO';
                            } else {
                                echo 'SI';
                            }
                        }
                        ?>
                    </td>

                    <td style="width: 20%">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class'=>'btn btn-sm btn-info']) ?>
                        <?php
                        $col = false;
                        if(isset($admin_user)) {
                            foreach ($user->roles as $role){
                                if($role->id == 4){
                                    $col = true;
                                }
                            }
                            if($col == false) {
                                ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                <?php
                            }else{
                                ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'editcolegio', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                <?php
                            }
                        }else if(isset($gestor_user_auth)){
                            foreach ($user->roles as $role){
                                if($role->id == 4){
                                    $col = true;
                                }
                            }
                            if($col == false) {
                                ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-info']) ?>

                                <?php
                            }else{
                                ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'editcolegio', $user->id], ['class' => 'btn btn-sm btn-info']) ?>

                                <?php
                            }
                        }
                        ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total') ?></p>
            </div>
        </div>
    </div>
</div>

<script>
    var base = "<?php echo \Cake\Routing\Router::url('/'); ?>";
      var basePath = "<?php echo $this->Url->build([
            "controller" => "Users",
            "action" => "cambia"]);
            ; ?>";
    //var basePath ='http://localhost/blancinegre/users/cambia'
    $(document).ready(function(){

        $('.cambiaValidoNO').on('click', function(event){
            var iduser = $(this).attr("id");
                $.ajax({
                type: "POST",
                url: basePath,
                data:{
                    id:$(this).attr("id")
                },
                dataType: "json",
                success: function(data){
                    if(data['error']=='NO'){
                        $('#msg').html('<div class="alert alert-success flash-msg">'+data["mensaje"]+'</div>');
                        //$('.flash-msg').delay(2000).fadeOut('slow');
                        setTimeout(function () {
                            //window.location.replace(base+"users/asocia/"+iduser);
                            window.location.replace(base+"users/index");
                        }, 2000)
                    }else{
                        $('#msg').html('<div class="alert alert-danger flash-msg">'+data["mensaje"]+'</div>');
                    }

                },
                error: function(){
                    alert('Tenemos problemas!!');
                }
            });
            return false;
        });

        $('.cambiaValidoSI').on('click', function(event){
            $.ajax({
                type: "POST",
                url: basePath,
                data:{
                    id:$(this).attr("id")
                },
                dataType: "json",
                success: function(data){
                    if(data['error']=='NO'){
                        $('#msg').html('<div class="alert alert-success flash-msg">'+data["mensaje"]+'</div>');
                        //$('.flash-msg').delay(2000).fadeOut('slow');
                        setTimeout(function () {
                            //window.location.replace(base+"users/asocia/"+iduser);
                            window.location.replace(base+"users/index");
                        }, 2000)
                    }else{
                        $('#msg').html('<div class="alert alert-danger flash-msg">'+data["mensaje"]+'</div>');
                    }
                },
                error: function(){
                    alert('Tenemos problemas!!');
                }
            });
            return false;
        });
    });


</script>