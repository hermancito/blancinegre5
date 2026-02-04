<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actor $actor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Actor'), ['action' => 'edit', $actor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Actor'), ['action' => 'delete', $actor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Actors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Actor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="actors view content">
            <h3><?= h($actor->descripc) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descripc') ?></th>
                    <td><?= h($actor->descripc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($actor->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Personalcontrols') ?></h4>
                <?php if (!empty($actor->personalcontrols)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Tipoincidencia Id') ?></th>
                            <th><?= __('Colegio Id') ?></th>
                            <th><?= __('Descripc') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Comodin1') ?></th>
                            <th><?= __('Comodin2') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($actor->personalcontrols as $personalcontrol) : ?>
                        <tr>
                            <td><?= h($personalcontrol->id) ?></td>
                            <td><?= h($personalcontrol->user_id) ?></td>
                            <td><?= h($personalcontrol->tipoincidencia_id) ?></td>
                            <td><?= h($personalcontrol->colegio_id) ?></td>
                            <td><?= h($personalcontrol->descripc) ?></td>
                            <td><?= h($personalcontrol->created) ?></td>
                            <td><?= h($personalcontrol->modified) ?></td>
                            <td><?= h($personalcontrol->comodin1) ?></td>
                            <td><?= h($personalcontrol->comodin2) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Personalcontrols', 'action' => 'view', $personalcontrol->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Personalcontrols', 'action' => 'edit', $personalcontrol->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'Personalcontrols', 'action' => 'delete', $personalcontrol->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $personalcontrol->id),
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