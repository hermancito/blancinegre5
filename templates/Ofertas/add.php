<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oferta $oferta
 * @var \Cake\Collection\CollectionInterface|string[] $comercials
 * @var \Cake\Collection\CollectionInterface|string[] $ubicacions
 * @var \Cake\Collection\CollectionInterface|string[] $ofertaspreciosacts
 * @var \Cake\Collection\CollectionInterface|string[] $tips
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ofertas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertas form content">
            <?= $this->Form->create($oferta) ?>
            <fieldset>
                <legend><?= __('Add Oferta') ?></legend>
                <?php
                    echo $this->Form->control('comercial_id', ['options' => $comercials]);
                    echo $this->Form->control('tipo_entidad');
                    echo $this->Form->control('duracion_contrato');
                    echo $this->Form->control('fecha_firma');
                    echo $this->Form->control('fecha_ini');
                    echo $this->Form->control('proveedor_unico');
                    echo $this->Form->control('ofertamos_medidodia');
                    echo $this->Form->control('ofertamos_matinera');
                    echo $this->Form->control('tipo_oferta');
                    echo $this->Form->control('selecc_contrato');
                    echo $this->Form->control('ubicacion_id', ['options' => $ubicacions]);
                    echo $this->Form->control('horario');
                    echo $this->Form->control('importe');
                    echo $this->Form->control('email_oferta');
                    echo $this->Form->control('cif_oferta');
                    echo $this->Form->control('ofertaspreciosacts._ids', ['options' => $ofertaspreciosacts]);
                    echo $this->Form->control('tips._ids', ['options' => $tips]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
