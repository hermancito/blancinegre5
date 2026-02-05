<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comercial $comercial
 * @var \Cake\Collection\CollectionInterface|string[] $agentes
 * @var \Cake\Collection\CollectionInterface|string[] $empresas
 * @var \Cake\Collection\CollectionInterface|string[] $empresados
 * @var \Cake\Collection\CollectionInterface|string[] $empresatres
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Comercials'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="comercials form content">
            <?= $this->Form->create($comercial) ?>
            <fieldset>
                <legend><?= __('Add Comercial') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('nom_centro');
                    echo $this->Form->control('localidad');
                    echo $this->Form->control('agente_id', ['options' => $agentes, 'empty' => true]);
                    echo $this->Form->control('estado');
                    echo $this->Form->control('jornada');
                    echo $this->Form->control('pax');
                    echo $this->Form->control('control_admon');
                    echo $this->Form->control('comarca');
                    echo $this->Form->control('tipo_via');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('num');
                    echo $this->Form->control('cp');
                    echo $this->Form->control('provincia');
                    echo $this->Form->control('tfno');
                    echo $this->Form->control('fax');
                    echo $this->Form->control('cif');
                    echo $this->Form->control('gestion_actual');
                    echo $this->Form->control('email_centro');
                    echo $this->Form->control('contacto1_cargo');
                    echo $this->Form->control('contacto1_nom_tfno');
                    echo $this->Form->control('contacto1_mail');
                    echo $this->Form->control('contacto2_cargo');
                    echo $this->Form->control('contacto2_nom_tfno');
                    echo $this->Form->control('contacto2_mail');
                    echo $this->Form->control('contacto3_datos');
                    echo $this->Form->control('matinal');
                    echo $this->Form->control('mediodia');
                    echo $this->Form->control('j_continua');
                    echo $this->Form->control('tardes');
                    echo $this->Form->control('jun_sept');
                    echo $this->Form->control('vacacionales');
                    echo $this->Form->control('plant_comercial');
                    echo $this->Form->control('historial_citas_observ');
                    echo $this->Form->control('ini_cto');
                    echo $this->Form->control('ini_cto_agente');
                    echo $this->Form->control('fin_cto');
                    echo $this->Form->control('fin_cto_agente');
                    echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
                    echo $this->Form->control('empresados_id', ['options' => $empresados, 'empty' => true]);
                    echo $this->Form->control('empresatres_id', ['options' => $empresatres, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
