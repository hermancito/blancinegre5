<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Intervencion $intervencion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Intervencion'), ['action' => 'edit', $intervencion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Intervencion'), ['action' => 'delete', $intervencion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $intervencion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Intervencions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Intervencion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="intervencions view content">
            <h3><?= h($intervencion->tipo_interv) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo Interv') ?></th>
                    <td><?= h($intervencion->tipo_interv) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($intervencion->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Coordinadordiaris') ?></h4>
                <?php if (!empty($intervencion->coordinadordiaris)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Coordinador Id') ?></th>
                            <th><?= __('Dia') ?></th>
                            <th><?= __('Hora Ini') ?></th>
                            <th><?= __('Hora Fin') ?></th>
                            <th><?= __('Observ') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Resuelta') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($intervencion->coordinadordiaris as $coordinadordiari) : ?>
                        <tr>
                            <td><?= h($coordinadordiari->id) ?></td>
                            <td><?= h($coordinadordiari->colegio_id) ?></td>
                            <td><?= h($coordinadordiari->coordinador_id) ?></td>
                            <td><?= h($coordinadordiari->dia) ?></td>
                            <td><?= h($coordinadordiari->hora_ini) ?></td>
                            <td><?= h($coordinadordiari->hora_fin) ?></td>
                            <td><?= h($coordinadordiari->observ) ?></td>
                            <td><?= h($coordinadordiari->created) ?></td>
                            <td><?= h($coordinadordiari->modified) ?></td>
                            <td><?= h($coordinadordiari->resuelta) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Coordinadordiaris', 'action' => 'view', $coordinadordiari->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Coordinadordiaris', 'action' => 'edit', $coordinadordiari->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Coordinadordiaris', 'action' => 'delete', $coordinadordiari->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $coordinadordiari->id),
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