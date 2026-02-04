<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colegio $colegio
 * @var string[]|\Cake\Collection\CollectionInterface $tablaspreciosvbles
 * @var string[]|\Cake\Collection\CollectionInterface $activitats
 * @var string[]|\Cake\Collection\CollectionInterface $coordinadors
 * @var string[]|\Cake\Collection\CollectionInterface $monitors
 * @var string[]|\Cake\Collection\CollectionInterface $notifcolegios
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $colegio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $colegio->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Colegios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colegios form content">
            <?= $this->Form->create($colegio) ?>
            <fieldset>
                <legend><?= __('Edit Colegio') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('username');
                    echo $this->Form->control('direccion');
                    echo $this->Form->control('cp');
                    echo $this->Form->control('poblacion');
                    echo $this->Form->control('eq_directivo');
                    echo $this->Form->control('tfno_eqdirect');
                    echo $this->Form->control('email_eqdirectivo');
                    echo $this->Form->control('pdte_ampa');
                    echo $this->Form->control('tfno_pdte');
                    echo $this->Form->control('email_pdte');
                    echo $this->Form->control('resp_act');
                    echo $this->Form->control('tfno_resp');
                    echo $this->Form->control('email_resp');
                    echo $this->Form->control('conserge');
                    echo $this->Form->control('tfno_conserge');
                    echo $this->Form->control('email_conserge');
                    echo $this->Form->control('email_centro');
                    echo $this->Form->control('cif_centro');
                    echo $this->Form->control('email_ampa');
                    echo $this->Form->control('cif_ampa');
                    echo $this->Form->control('cesion_llaves');
                    echo $this->Form->control('unidades_llaves');
                    echo $this->Form->control('alarma');
                    echo $this->Form->control('iban_centro');
                    echo $this->Form->control('iban_ampa');
                    echo $this->Form->control('observ');
                    echo $this->Form->control('tablaspreciosvble_id', ['options' => $tablaspreciosvbles, 'empty' => true]);
                    echo $this->Form->control('suplemento_nosocios');
                    echo $this->Form->control('porcentaje_nosocios');
                    echo $this->Form->control('mostrar_cuota');
                    echo $this->Form->control('dcto_hermanos');
                    echo $this->Form->control('activitats._ids', ['options' => $activitats]);
                    echo $this->Form->control('coordinadors._ids', ['options' => $coordinadors]);
                    echo $this->Form->control('monitors._ids', ['options' => $monitors]);
                    echo $this->Form->control('notifcolegios._ids', ['options' => $notifcolegios]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
