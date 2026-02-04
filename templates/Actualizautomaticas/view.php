<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Actualizautomatica $actualizautomatica
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Actualizautomatica'), ['action' => 'edit', $actualizautomatica->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Actualizautomatica'), ['action' => 'delete', $actualizautomatica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $actualizautomatica->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Actualizautomaticas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Actualizautomatica'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="actualizautomaticas view content">
            <h3><?= h($actualizautomatica->tipo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($actualizautomatica->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($actualizautomatica->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anyo') ?></th>
                    <td><?= $this->Number->format($actualizautomatica->anyo) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>