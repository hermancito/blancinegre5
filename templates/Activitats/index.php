<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-heading col-md-12">
            <div class="col-md-2">
                <h3 class="panel-title">Lista de Actividades</h3>
            </div>
            <div class="col-md-4">
                <?= $this->Form->create($activitats, ['type' => 'get', 'class'=>'form-inline']) ?>
                <div class="form-group">
                    <?php
                    echo $this->Form->control('PrgSearch', ['label'=>'', 'placeholder' => 'Buscar actividades']);
                    ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->button(__('Buscar',['action' => 'index'])) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
            <div class="col-md-4">
                <?= $this->Html->link(__('Todos los grupos'), ['controller' => 'Activitatsgrups','action' => 'index'], ['class'=>'btn btn-sm btn-info']); ?>

            </div>
            <div class="col-md-2">
                <?= $this->Html->link(__('Excel'), ['action' => 'exportexcel', '_ext'=>'xlsx'], ['class'=>"btn btn-sm btn-success glyphicon glyphicon-save-file"]); ?>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" style="width:10%"><?= $this->Paginator->sort('nombre') ?></th>
                    <th scope="col" style="width:5%"><?= $this->Paginator->sort('codigo') ?></th>
                    <th scope="col" style="width:5%"><?= $this->Paginator->sort('activitatsgrup_id', $title = 'Grupos') ?></th>
                    <th scope="col" style="width:20%"><?= $this->Paginator->sort('colegio_id', $title = 'Centros') ?></th>
                    <th scope="col" style="width:20%"><?= $this->Paginator->sort('monitor_id', $title = 'Plantilla Monitores') ?></th>
                    <th scope="col" style="width:20%"><?= $this->Paginator->sort('monitor_id', $title = 'Bolsa Monitores') ?></th>
                    <th scope="col" style="width:20%"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($activitats as $activitat): ?>
                    <tr>
                        <td><?= h($activitat->nombre) ?></td>
                        <td><?= h($activitat->codigo) ?></td>
                        <?php if (!empty($activitat->activitatsgrups)): ?>
                            <td><table cellpadding="0" cellspacing="0">
                                    <?php foreach ($activitat->activitatsgrups as $activitatsgrup): ?>
                                    <tr>
                                        <td><?= h($activitatsgrup->codigo) ?></td>

                                    </tr>
                                    <?php endforeach; ?>
                            </table></td>
                        <?php
                        else:?>
                        <td></td>
                        <?php
                        endif; ?>
                        <?php if (!empty($activitat->colegios)): ?>
                            <td><table cellpadding="0" cellspacing="0">
                                    <?php foreach ($activitat->colegios as $colegio): ?>
                                        <tr>
                                            <td><?= h($colegio->username) ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </table></td>
                        <?php
                        else:?>
                            <td></td>
                        <?php
                        endif; ?>
                        <?php if (!empty($activitat->monitors)): ?>
                            <td><table cellpadding="0" cellspacing="0">
                                    <?php foreach ($activitat->monitors as $monit): ?>
                                        <?php if ($monit->validado == true && $monit->bolsa == false): ?>
                                        <tr>
                                            <td><?= h($monit->username).'/ '.h($monit->nombre).' '.h($monit->apellidos) ?></td>

                                        </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </table></td>
                        <?php
                        else:?>
                            <td></td>
                        <?php
                        endif; ?>
                        <?php if (!empty($activitat->monitors)): ?>
                            <td><table cellpadding="0" cellspacing="0">
                                    <?php foreach ($activitat->monitors as $monit): ?>
                                        <?php if ($monit->validado == true && $monit->bolsa == true): ?>
                                            <tr>
                                                <td><?= h($monit->username).'/ '.h($monit->nombre).' '.h($monit->apellidos) ?></td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </table></td>
                        <?php
                        else:?>
                            <td></td>
                        <?php
                        endif; ?>
                        <td style="width: 30%">
                            <?= $this->Html->link(__('Grupos'), ['controller' => 'Activitatsgrups', 'action' => 'indexact', $activitat->id], ['class'=>'btn btn-sm btn-primary']); ?>
                            <?= $this->Html->link(__('View'), ['action' => 'view', $activitat->id], ['class'=>'btn btn-sm btn-info']) ?>
                            <?php if(isset($admin_user)): ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $activitat->id], ['class'=>'btn btn-sm btn-info']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $activitat->id], ['class'=>'btn btn-sm btn-danger', 'confirm' => __('Estás seguro de borrar la actividad. El borrado de una actividad implica que los grupos asociados a la misma también se borrarán # {0}?', $activitat->id)]) ?>
                            <?php endif; ?>
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