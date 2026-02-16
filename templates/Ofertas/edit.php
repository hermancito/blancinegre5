<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oferta $oferta
 * @var string[]|\Cake\Collection\CollectionInterface $comercials
 * @var string[]|\Cake\Collection\CollectionInterface $ubicacions
 * @var string[]|\Cake\Collection\CollectionInterface $ofertaspreciosacts
 * @var string[]|\Cake\Collection\CollectionInterface $tips
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $oferta->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $oferta->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ofertas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertas form content">
            <?= $this->Form->create($oferta) ?>
            <fieldset>
                <legend><?= __('Edit Oferta') ?></legend>
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
