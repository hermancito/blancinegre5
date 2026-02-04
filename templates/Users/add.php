<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \Cake\Collection\CollectionInterface|string[] $colegios
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 * @var \Cake\Collection\CollectionInterface|string[] $destinos
 * @var \Cake\Collection\CollectionInterface|string[] $roles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('username');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('photo_dir');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellidos');
                    echo $this->Form->control('tfno1');
                    echo $this->Form->control('tfno2');
                    echo $this->Form->control('nif');
                    echo $this->Form->control('validado');
                    echo $this->Form->control('bolsa');
                    echo $this->Form->control('datos');
                    echo $this->Form->control('info_mail');
                    echo $this->Form->control('sexo');
                    echo $this->Form->control('seg_soc');
                    echo $this->Form->control('iban');
                    echo $this->Form->control('cuenta');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('poblacion');
                    echo $this->Form->control('cod_postal');
                    echo $this->Form->control('contrato');
                    echo $this->Form->control('fecha_ant', ['empty' => true]);
                    echo $this->Form->control('carnet_cond');
                    echo $this->Form->control('vehiculo');
                    echo $this->Form->control('titulaciones');
                    echo $this->Form->control('observ');
                    echo $this->Form->control('certif_antec', ['empty' => true]);
                    echo $this->Form->control('mutua', ['empty' => true]);
                    echo $this->Form->control('colegio_id', ['options' => $colegios, 'empty' => true]);
                    echo $this->Form->control('token');
                    echo $this->Form->control('fecha_nac', ['empty' => true]);
                    echo $this->Form->control('token_dispositivo');
                    echo $this->Form->control('niv_ingles');
                    echo $this->Form->control('niv_valencia');
                    echo $this->Form->control('disponib');
                    echo $this->Form->control('activitats._ids', ['options' => $activitats]);
                    echo $this->Form->control('destinos._ids', ['options' => $destinos]);
                    echo $this->Form->control('roles._ids', ['options' => $roles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
