<?php
    /**
    * @var \App\View\AppView $this
    * @var \App\Model\Entity\Notifcolegio[]|\Cake\Collection\CollectionInterface $notifcolegios
    */
    ?>
    <div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading col-md-12">
            <div class="col-md-4">
                <h3 class="panel-title">Avisos a centros</h3>
            </div>
            <div class="col-md-3">
                <?= $this->Form->create($notifcolegios, ['type' => 'get', 'class'=>'form-inline']) ?>
                <div class="form-group">
                    <?php
                    echo $this->Form->control('PrgSearch', ['label'=>'', 'placeholder' => 'Buscar avisos']);
                    ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->button(__('Buscar',['action' => 'index'])) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <div class="col-md-5">
                <?= $this->Form->create($notifcolegios, ['type' => 'get', 'class'=>'form-inline']) ?>
                <div class="form-group">
                    <?php
                    echo $this->Form->control('avisosxcoleg', ['options' => $colegios, 'label'=>'', 'empty' => 'Buscar por centro']);
                    ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->button(__('Buscar',['action' => 'index'],['class'=>'btn btn-sm btn-danger'])) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('user_id', $title = 'Autor') ?></th>
                    <th scope="col"><?= h('Centros') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('nombre', $title = 'Nombre aviso') ?></th>
                    <th scope="col"><?= h('Archivo adjunto') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('validado') ?></th>
                    <th scope="col"><?= h('Mail') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($notifcolegios as $notifcolegio): ?>
                    <tr>
                        <td><?= $this->Number->format($notifcolegio->id) ?></td>
                        <td><?= $notifcolegio->has('user') ? $this->Html->link($notifcolegio->user->label, ['controller' => 'Users', 'action' => 'view', $notifcolegio->user->id]) : '' ?></td>
                        <td><button type="button" class="btn btn-sm btn-primary colegios" data-toggle="modal" data-target="#myModal" id="<?php echo $notifcolegio->id ?>" data-name="<?php echo $notifcolegio->nombre ?>">Ver centros</button></td>
                        <td><?= h($notifcolegio->nombre) ?></td>
                        <?php
                        if($notifcolegio->photo !== null){
                            ?>
                            <td><?= $this->Html->link('Archivo', '/files/Notifcolegios/photo/' .  $notifcolegio->photo); ?></td>
                        <?php
                        }else{
                         ?>
                         <td>--</td>
                         <?php
                        }
                        ?>
                        <td>
                            <?php
                            if($notifcolegio->validado==false){
                                echo $this->Form->button('NO', ['class'=>'btn btn-sm btn-danger cambiaValido', 'id'=>$notifcolegio->id]);
                            }else{
                                echo $this->Form->button('SI', ['class'=>'btn btn-sm btn-success cambiaValido', 'id'=>$notifcolegio->id]);
                            }
                            ?>
                        </td>
                        <td>
                            <?php if($notifcolegio->validado==true && $notifcolegio->comodin!='s'):?>
                                <button class="btn btn-sm btn-success enviaMail glyphicon glyphicon-envelope <?php echo 'env'.$notifcolegio->id; ?>" id="<?php echo $notifcolegio->id; ?>" title="Enviar aviso a todos los alumnos de los centros del aviso"></button>
                            <?php elseif($notifcolegio->validado==true && $notifcolegio->comodin=='s'):?>
                                <button class="btn btn-sm btn-warning enviaMail glyphicon glyphicon-envelope" id="<?php echo $notifcolegio->id; ?>" title="El aviso ya está enviado"></button>
                            <?php elseif($notifcolegio->validado==false):?>
                                <button disabled class="btn btn-sm btn-warning enviaMail glyphicon glyphicon-envelope" id="<?php echo $notifcolegio->id; ?>" title="El aviso no está validado"></button>
                            <?php endif; ?>
                        </td>
                        <td style="width: 20%">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $notifcolegio->id], ['class'=>'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notifcolegio->id], ['class'=>'btn btn-sm btn-info']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notifcolegio->id], ['class'=>'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $notifcolegio->id)]) ?>
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
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Centros destinatarios de la notificación</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div id="msg_col" class="form-group col-md-9"></div>
                    <div class="form-group col-md-9">
                        <table id="lista_col" class="table table-striped"></table>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<script>
    var base = "<?php echo \Cake\Routing\Router::url('/'); ?>";
    var basePath = "<?php echo $this->Url->build([
        "controller" => "Notifcolegios",
        "action" => "cambia"]);
        ; ?>";
    var listacolPath = "<?php echo $this->Url->build([
        "controller" => "Notifcolegios",
        "action" => "listacolegios"]);
        ; ?>";
    var mailPath = "<?php echo $this->Url->build([
        "controller" => "Notifcolegios",
        "action" => "mailnotas"]);
        ; ?>";
    $(document).ready(function(){

        $('.cambiaValido').on('click', function(event){

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
                            window.location.replace(base+"notifcolegios/index");
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

        $('.colegios').on('click', function(event){
            $('#myModal').modal('show');
            $.ajax({
                type: "POST",
                url: listacolPath,
                data:{
                    id:$(this).attr("id")
                },
                dataType: "json",
                success: function(data){
                    $('#lista_col').empty();
                    for(var i=0; i<data['colegios'].length; i++){
                        $('#lista_col').append('<tr><td>'+data['colegios'][i]+'</td></tr>');
                    }


                },
                error: function(){
                    alert('Tenemos problemas!!');
                }
            });
            return false;
        });

        $('.enviaMail').on('click', function(event){
            var id_notif = $(this).attr("id");
            $.ajax({
                type: "POST",
                url: mailPath,
                data:{
                    id:id_notif
                },
                dataType: "json",
                success: function(data){
                    if(data['error']=='NO'){
                        $('#msg').html('<div class="alert alert-success flash-msg">'+data["mensaje"]+'</div>');
                        $('#msg').delay(5000).fadeOut('slow');
                        $('.env'+id_notif).css("background-color","yellow");
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