<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Registroalta $registroalta
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Registroalta'), ['action' => 'edit', $registroalta->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Registroalta'), ['action' => 'delete', $registroalta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $registroalta->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Registroaltas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Registroalta'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="registroaltas view content">
            <h3><?= h($registroalta->alta_amplia) ?></h3>
            <table>
                <tr>
                    <th><?= __('Colegio') ?></th>
                    <td><?= $registroalta->hasValue('colegio') ? $this->Html->link($registroalta->colegio->codigo, ['controller' => 'Colegios', 'action' => 'view', $registroalta->colegio->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Alumno') ?></th>
                    <td><?= $registroalta->hasValue('alumno') ? $this->Html->link($registroalta->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $registroalta->alumno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Concepto') ?></th>
                    <td><?= h($registroalta->concepto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Alta Amplia') ?></th>
                    <td><?= h($registroalta->alta_amplia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Material') ?></th>
                    <td><?= h($registroalta->material) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($registroalta->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $registroalta->importe === null ? '' : $this->Number->format($registroalta->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha Alta') ?></th>
                    <td><?= h($registroalta->fecha_alta) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($registroalta->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($registroalta->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($registroalta->observ)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Activitats') ?></h4>
                <?php if (!empty($registroalta->activitats)) : ?>
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
                        <?php foreach ($registroalta->activitats as $activitat) : ?>
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
        </div>
    </div>
</div>