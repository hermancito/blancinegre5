<?php
/*$this->layout = 'sin_menu';
*/?>
<div class="home">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title"><?=__('Aplicación administración')?></h3>
                <h4>Sesión iniciada</h4>
                <?= $this->Html->image('logo-bina.png', ['alt' => 'Blanc i Negre animació']);?>
            </div>
            <div class="panel-body">
                <?php
                if(isset($admin_user) or isset($gestorRRHH_user_auth)  or isset($gestor_user_auth)){
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="well">
                            <h1><?=__('Bienvenido a la aplicación de administración de Blanc i Negre Animació')?></h1>
                        </div>
                    </div>
                    <!--<div class="col-md-3">
                        <?php
/*                        echo $this->Html->link(' Roles', array(
                            'controller'=>'roles',
                            'action'=>'index'), array('class'=>'btn btn-block btn-info glyphicon glyphicon-cog'));
                        */?>
                    </div>
                    <div class="col-md-3">
                        <?php
/*                        echo $this->Html->link(' Usuarios', array(
                            'controller'=>'users',
                            'action'=>'index'), array('class'=>'btn btn-block btn-info glyphicon glyphicon-user'));
                        */?>
                    </div>
                    <div class="col-md-3">
                        <?php
/*                        echo $this->Html->link(' Actividades', array(
                            'controller'=>'activitats',
                            'action'=>'index'), array('class'=>'btn btn-block btn-info glyphicon glyphicon-knight'));
                        */?>
                    </div>
                    <div class="col-md-3">
                        <?php
/*                        echo $this->Html->link(' Alumnos', array(
                            'controller'=>'alumnos',
                            'action'=>'index'), array('class'=>'btn btn-block btn-info glyphicon glyphicon-education'));
                        */?>
                    </div>-->
                </div>
                <!--<hr>
                <div class="row">
                    <div class="col-md-4">
                        <?php
/*                        echo $this->Html->link(' Boletines-Notas', array(
                            'controller'=>'notas',
                            'action'=>'index'), array('class'=>'btn btn-block btn-primary glyphicon glyphicon-book'));
                        */?>
                    </div>
                    <div class="col-md-4">
                        <?php
/*                        echo $this->Html->link(' Notificaciones', array(
                            'controller'=>'notificacions',
                            'action'=>'index'), array('class'=>'btn btn-block btn-primary glyphicon glyphicon-envelope'));
                        */?>
                    </div>
                    <div class="col-md-4">
                        <?php
/*                        echo $this->Html->link(' Horarios Monitores', array(
                            'controller'=>'horarimonitors',
                            'action'=>'index'), array('class'=>'btn btn-block btn-primary glyphicon glyphicon-time'));
                        */?>
                    </div>
                </div>
                    <hr>
                <div class="row">
                    <div class="col-md-6">
                        <?php
/*                        echo $this->Html->link(' Quien ha visto los Boletines-Notas', array(
                            'controller'=>'notas-users',
                            'action'=>'index'), array('class'=>'btn btn-block btn-warning glyphicon glyphicon-eye-open'));
                        */?>
                    </div>
                    <div class="col-md-6">
                        <?php
/*                        echo $this->Html->link(' Quien ha visto las Notificaciones', array(
                            'controller'=>'notificacions-users',
                            'action'=>'index'), array('class'=>'btn btn-block btn-warning glyphicon glyphicon-eye-open'));
                        */?>
                    </div>
                </div>-->
                <?php }else if(isset($coord_user_auth)){ ?>
                    <div class="col-md-12">
                        <div class="well">
                            <h1><?=__('Bienvenido a la aplicación para coordinadores de Blanc i Negre Animació')?></h1>
                        </div>
                    </div>
                <?php }else if(isset($superv_user_auth)){ ?>
                    <div class="col-md-12">
                        <div class="well">
                            <h1><?=__('Bienvenido a la aplicación para supervisores de Blanc i Negre Animació')?></h1>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>

</div>


