<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Volante $volante
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Volante'), ['action' => 'edit', $volante->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Volante'), ['action' => 'delete', $volante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $volante->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Volantes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Volante'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="volantes view content">
            <h3><?= h($volante->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Monitor') ?></th>
                    <td><?= $volante->hasValue('monitor') ? $this->Html->link($volante->monitor->username, ['controller' => 'Monitors', 'action' => 'view', $volante->monitor->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($volante->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($volante->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($volante->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Observ') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($volante->observ)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Dias') ?></h4>
                <?php if (!empty($volante->dias)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($volante->dias as $dia) : ?>
                        <tr>
                            <td><?= h($dia->id) ?></td>
                            <td><?= h($dia->nombre) ?></td>
                            <td><?= h($dia->descripc) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Dias', 'action' => 'view', $dia->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Dias', 'action' => 'edit', $dia->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Dias', 'action' => 'delete', $dia->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $dia->id),
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