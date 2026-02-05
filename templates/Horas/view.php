<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hora $hora
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Hora'), ['action' => 'edit', $hora->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Hora'), ['action' => 'delete', $hora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hora->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Horas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Hora'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="horas view content">
            <h3><?= h($hora->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($hora->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora') ?></th>
                    <td><?= h($hora->hora) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Disponibilitats') ?></h4>
                <?php if (!empty($hora->disponibilitats)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Monitor Id') ?></th>
                            <th><?= __('Dia Id') ?></th>
                            <th><?= __('Tiponodisponibilitat Id') ?></th>
                            <th><?= __('Activitatsgrup Id') ?></th>
                            <th><?= __('Disponible') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($hora->disponibilitats as $disponibilitat) : ?>
                        <tr>
                            <td><?= h($disponibilitat->id) ?></td>
                            <td><?= h($disponibilitat->monitor_id) ?></td>
                            <td><?= h($disponibilitat->dia_id) ?></td>
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