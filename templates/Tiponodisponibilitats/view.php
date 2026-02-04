<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tiponodisponibilitat $tiponodisponibilitat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Tiponodisponibilitat'), ['action' => 'edit', $tiponodisponibilitat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Tiponodisponibilitat'), ['action' => 'delete', $tiponodisponibilitat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiponodisponibilitat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Tiponodisponibilitats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Tiponodisponibilitat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="tiponodisponibilitats view content">
            <h3><?= h($tiponodisponibilitat->descripc) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripc') ?></th>
                    <td><?= h($tiponodisponibilitat->descripc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Color') ?></th>
                    <td><?= h($tiponodisponibilitat->color) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tiponodisponibilitat->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Disponibilitats') ?></h4>
                <?php if (!empty($tiponodisponibilitat->disponibilitats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Monitor Id') ?></th>
                            <th><?= __('Dia Id') ?></th>
                            <th><?= __('Hora Id') ?></th>
                            <th><?= __('Activitatsgrup Id') ?></th>
                            <th><?= __('Disponible') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($tiponodisponibilitat->disponibilitats as $disponibilitat) : ?>
                        <tr>
                            <td><?= h($disponibilitat->id) ?></td>
                            <td><?= h($disponibilitat->monitor_id) ?></td>
                            <td><?= h($disponibilitat->dia_id) ?></td>
                            <td><?= h($disponibilitat->hora_id) ?></td>
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