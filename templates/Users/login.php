<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="identif">
    <div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Panel de administración</h3>
                <?= $this->Html->image('logo-bina.png', ['alt' => 'Blanc i Negre animació']);?>
            </div>
            <div class="panel-body">
                <?= $this->Flash->render('auth') ?>
                <?= $this->Form->create() ?>
                <legend><?= __('Por favor, ingresa tu email y password') ?></legend>
                <div class="form-group">
                    <label>Email</label>
                    <?= $this->Form->control('email',  array('label'=>'', 'class'=>'form-control')) ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <?= $this->Form->control('password',  array('label'=>'', 'class'=>'form-control')) ?>
                </div>
                <!--<div class="form-group">
                    <?/*= $this->Recaptcha->display() */?>
                </div>-->
                <div class="form-group">
                    <div class="col-xs-4 col-sm-4 col-md-4">
                    <?= $this->Form->button(__('Login'), ['class'=>'btn btn-success btn-lg btn-block']);?>
                    </div>
                    <!--<div class="col-xs-4 col-sm-4 col-md-4">
                    <?/*= $this->Html->link('Registrarse', ['controller' => 'Users', 'action' => 'registrousers'],
                    ['class' => 'btn btn-info btn-lg btn-block']);;*/?>
                    </div>-->
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <?= $this->Html->link('Olvidé contraseña', ['controller' => 'Users', 'action' => 'forgotpassword'],
                            ['class' => 'btn btn-default btn-lg btn-block']);;?>
                    </div>

                <?= $this->Form->end() ?>
                <?php
                // echo $this->Html->link('He olvidado la contraseña', array(
                //     'controller'=>'users',
                //     'action'=>'add'),
                //     array('class'=>'button'));
                ?>
            </div>
        </div>
    </div>
</div>