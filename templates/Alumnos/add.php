<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alumno $alumno
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $user2s
 * @var \Cake\Collection\CollectionInterface|string[] $colegs
 * @var \Cake\Collection\CollectionInterface|string[] $activitats
 * @var \Cake\Collection\CollectionInterface|string[] $activitatsgrups
 * @var \Cake\Collection\CollectionInterface|string[] $coordinadors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Alumnos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="alumnos form content">
            <?= $this->Form->create($alumno) ?>
            <fieldset>
                <legend><?= __('Add Alumno') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                    echo $this->Form->control('user2_id', ['options' => $user2s, 'empty' => true]);
                    echo $this->Form->control('coleg_id', ['options' => $colegs, 'empty' => true]);
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('nombre_apellidos');
                    echo $this->Form->control('anyo');
                    echo $this->Form->control('tfno');
                    echo $this->Form->control('movil');
                    echo $this->Form->control('activo');
                    echo $this->Form->control('socio');
                    echo $this->Form->control('email');
                    echo $this->Form->control('cuenta');
                    echo $this->Form->control('iban');
                    echo $this->Form->control('titular');
                    echo $this->Form->control('nif');
                    echo $this->Form->control('cobro');
                    echo $this->Form->control('recibo');
                    echo $this->Form->control('material');
                    echo $this->Form->control('coment_pub');
                    echo $this->Form->control('coment_priv');
                    echo $this->Form->control('ampa');
                    echo $this->Form->control('eliminado');
                    echo $this->Form->control('comedor');
                    echo $this->Form->control('datos');
                    echo $this->Form->control('info_mail');
                    echo $this->Form->control('comodin');
                    echo $this->Form->control('curso');
                    echo $this->Form->control('matricula');
                    echo $this->Form->control('no_socio');
                    echo $this->Form->control('suplemento');
                    echo $this->Form->control('dto_fijo');
                    echo $this->Form->control('dto_porcentaje');
                    echo $this->Form->control('suma_pfijo');
                    echo $this->Form->control('suma_pvble');
                    echo $this->Form->control('cuota_previa');
                    echo $this->Form->control('cuota');
                    echo $this->Form->control('nif_alumno');
                    echo $this->Form->control('merito1');
                    echo $this->Form->control('merito2');
                    echo $this->Form->control('merito3');
                    echo $this->Form->control('merito4');
                    echo $this->Form->control('merito5');
                    echo $this->Form->control('ingles_3a');
                    echo $this->Form->control('ingles_4a');
                    echo $this->Form->control('ingles_5a');
                    echo $this->Form->control('ingles_g1');
                    echo $this->Form->control('ingles_g2');
                    echo $this->Form->control('ingles_g3');
                    echo $this->Form->control('ingles_g4');
                    echo $this->Form->control('ingles_g5');
                    echo $this->Form->control('ingles_g6');
                    echo $this->Form->control('ingles_g7');
                    echo $this->Form->control('ingles_g8');
                    echo $this->Form->control('ingles_g9');
                    echo $this->Form->control('impago');
                    echo $this->Form->control('texto_impago');
                    echo $this->Form->control('sip');
                    echo $this->Form->control('activitats._ids', ['options' => $activitats]);
                    echo $this->Form->control('activitatsgrups._ids', ['options' => $activitatsgrups]);
                    echo $this->Form->control('coordinadors._ids', ['options' => $coordinadors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
