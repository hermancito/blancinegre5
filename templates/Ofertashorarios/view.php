<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ofertashorario $ofertashorario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ofertashorario'), ['action' => 'edit', $ofertashorario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ofertashorario'), ['action' => 'delete', $ofertashorario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ofertashorario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ofertashorarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ofertashorario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="ofertashorarios view content">
            <h3><?= h($ofertashorario->intervalo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Intervalo') ?></th>
                    <td><?= h($ofertashorario->intervalo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Accion') ?></th>
                    <td><?= h($ofertashorario->accion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ofertashorario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Importe') ?></th>
                    <td><?= $this->Number->format($ofertashorario->importe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ofertashorario->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ofertashorario->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Ofertas Ofertaspreciosacts') ?></h4>
                <?php if (!empty($ofertashorario->ofertas_ofertaspreciosacts)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ofertaspreciosact Id') ?></th>
                            <th><?= __('Oferta Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Horario') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ofertashorario->ofertas_ofertaspreciosacts as $ofertasOfertaspreciosact) : ?>
                        <tr>
                            <td><?= h($ofertasOfertaspreciosact->id) ?></td>
                            <td><?= h($ofertasOfertaspreciosact->ofertaspreciosact_id) ?></td>
                            <td><?= h($ofertasOfertaspreciosact->oferta_id) ?></td>
                            <td><?= h($ofertasOfertaspreciosact->created) ?></td>
                            <td><?= h($ofertasOfertaspreciosact->modified) ?></td>
                            <td><?= h($ofertasOfertaspreciosact->horario) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'OfertasOfertaspreciosacts', 'action' => 'view', $ofertasOfertaspreciosact->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'OfertasOfertaspreciosacts', 'action' => 'edit', $ofertasOfertaspreciosact->id]) ?>
                                <?= $this->Form->postLink(
                                    __('Delete'),
                                    ['controller' => 'OfertasOfertaspreciosacts', 'action' => 'delete', $ofertasOfertaspreciosact->id],
                                    [
                                        'method' => 'delete',
                                        'confirm' => __('Are you sure you want to delete # {0}?', $ofertasOfertaspreciosact->id),
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