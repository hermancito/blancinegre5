<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dia $dia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dia'), ['action' => 'edit', $dia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dia'), ['action' => 'delete', $dia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="dias view content">
            <h3><?= h($dia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($dia->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descripc') ?></th>
                    <td><?= h($dia->descripc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dia->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Activitats') ?></h4>
                <?php if (!empty($dia->activitats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dia->activitats as $activitat) : ?>
                        <tr>
                            <td><?= h($activitat->id) ?></td>
                            <td><?= h($activitat->nombre) ?></td>
                            <td><?= h($activitat->codigo) ?></td>
                            <td><?= h($activitat->created) ?></td>
                            <td><?= h($activitat->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Activitats', 'action' => 'view', $activitat->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Activitats', 'action' => 'edit', $activitat->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Activitats', 'action' => 'delete', $activitat->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $activitat->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Activitatsgrups') ?></h4>
                <?php if (!empty($dia->activitatsgrups)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Codigo') ?></th>
                            <th><?= __('Activitat Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Aula') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comentarios') ?></th>
                            <th><?= __('Tipo Fijo') ?></th>
                            <th><?= __('Tipo Vble') ?></th>
                            <th><?= __('Sala Fijo') ?></th>
                            <th><?= __('Sala Vble') ?></th>
                            <th><?= __('Visible Familias') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Aplicar Jornada') ?></th>
                            <th><?= __('Alum Min') ?></th>
                            <th><?= __('Alum Max') ?></th>
                            <th><?= __('Fecha Inicio') ?></th>
                            <th><?= __('Fecha Fin') ?></th>
                            <th><?= __('Matricula') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dia->activitatsgrups as $activitatsgrup) : ?>
                        <tr>
                            <td><?= h($activitatsgrup->id) ?></td>
                            <td><?= h($activitatsgrup->codigo) ?></td>
                            <td><?= h($activitatsgrup->activitat_id) ?></td>
                            <td><?= h($activitatsgrup->colegio_id) ?></td>
                            <td><?= h($activitatsgrup->aula) ?></td>
                            <td><?= h($activitatsgrup->created) ?></td>
                            <td><?= h($activitatsgrup->modified) ?></td>
                            <td><?= h($activitatsgrup->comentarios) ?></td>
                            <td><?= h($activitatsgrup->tipo_fijo) ?></td>
                            <td><?= h($activitatsgrup->tipo_vble) ?></td>
                            <td><?= h($activitatsgrup->sala_fijo) ?></td>
                            <td><?= h($activitatsgrup->sala_vble) ?></td>
                            <td><?= h($activitatsgrup->visible_familias) ?></td>
                            <td><?= h($activitatsgrup->descripc) ?></td>
                            <td><?= h($activitatsgrup->aplicar_jornada) ?></td>
                            <td><?= h($activitatsgrup->alum_min) ?></td>
                            <td><?= h($activitatsgrup->alum_max) ?></td>
                            <td><?= h($activitatsgrup->fecha_inicio) ?></td>
                            <td><?= h($activitatsgrup->fecha_fin) ?></td>
                            <td><?= h($activitatsgrup->matricula) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Activitatsgrups', 'action' => 'view', $activitatsgrup->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Activitatsgrups', 'action' => 'edit', $activitatsgrup->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Activitatsgrups', 'action' => 'delete', $activitatsgrup->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $activitatsgrup->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Volantes') ?></h4>
                <?php if (!empty($dia->volantes)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Monitor Id') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dia->volantes as $volante) : ?>
                        <tr>
                            <td><?= h($volante->id) ?></td>
                            <td><?= h($volante->monitor_id) ?></td>
                            <td><?= h($volante->observ) ?></td>
                            <td><?= h($volante->created) ?></td>
                            <td><?= h($volante->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Volantes', 'action' => 'view', $volante->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Volantes', 'action' => 'edit', $volante->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Volantes', 'action' => 'delete', $volante->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $volante->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Disponibilitats') ?></h4>
                <?php if (!empty($dia->disponibilitats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Monitor Id') ?></th>
                            <th><?= __('Hora Id') ?></th>
                            <th><?= __('Tiponodisponibilitat Id') ?></th>
                            <th><?= __('Activitatsgrup Id') ?></th>
                            <th><?= __('Disponible') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($dia->disponibilitats as $disponibilitat) : ?>
                        <tr>
                            <td><?= h($disponibilitat->id) ?></td>
                            <td><?= h($disponibilitat->monitor_id) ?></td>
                            <td><?= h($disponibilitat->hora_id) ?></td>
                            <td><?= h($disponibilitat->tiponodisponibilitat_id) ?></td>
                            <td><?= h($disponibilitat->activitatsgrup_id) ?></td>
                            <td><?= h($disponibilitat->disponible) ?></td>
                            <td><?= h($disponibilitat->created) ?></td>
                            <td><?= h($disponibilitat->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Disponibilitats', 'action' => 'view', $disponibilitat->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Disponibilitats', 'action' => 'edit', $disponibilitat->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Disponibilitats', 'action' => 'delete', $disponibilitat->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $disponibilitat->id),
                                    ]
                                ) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>