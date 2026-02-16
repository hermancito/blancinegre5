<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salario $salario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Salario'), ['action' => 'edit', $salario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Salario'), ['action' => 'delete', $salario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Salarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Salario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="salarios view content">
            <h3><?= h($salario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $salario->hasValue('user') ? $this->Html->link($salario->user->email, ['controller' => 'Users', 'action' => 'view', $salario->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($salario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sala Fijo') ?></th>
                    <td><?= $this->Number->format($salario->sala_fijo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sala Vble') ?></th>
                    <td><?= $this->Number->format($salario->sala_vble) ?></td>
                </tr>
                <tr>
                    <th><?= __('Plus Var') ?></th>
                    <td><?= $this->Number->format($salario->plus_var) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complemento') ?></th>
                    <td><?= $this->Number->format($salario->complemento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dietas') ?></th>
                    <td><?= $this->Number->format($salario->dietas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Eventos') ?></th>
                    <td><?= $this->Number->format($salario->eventos) ?></td>
                </tr>
                <tr>
                    <th><?= __('It') ?></th>
                    <td><?= $this->Number->format($salario->it) ?></td>
                </tr>
                <tr>
                    <th><?= __('Absentismo') ?></th>
                    <td><?= $this->Number->format($salario->absentismo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dto') ?></th>
                    <td><?= $this->Number->format($salario->dto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Nomina') ?></th>
                    <td><?= $this->Number->format($salario->nomina) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($salario->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($salario->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>