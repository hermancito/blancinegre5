<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ActivitatsDia $activitatsDia
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Activitats Dia'), ['action' => 'edit', $activitatsDia->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Activitats Dia'), ['action' => 'delete', $activitatsDia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $activitatsDia->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Activitats Dias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Activitats Dia'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="activitatsDias view content">
            <h3><?= h($activitatsDia->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $activitatsDia->hasValue('activitat') ? $this->Html->link($activitatsDia->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $activitatsDia->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Dia') ?></th>
                    <td><?= $activitatsDia->hasValue('dia') ? $this->Html->link($activitatsDia->dia->id, ['controller' => 'Dias', 'action' => 'view', $activitatsDia->dia->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($activitatsDia->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Ini') ?></th>
                    <td><?= h($activitatsDia->hora_ini) ?></td>
                </tr>
                <tr>
                    <th><?= __('Hora Fin') ?></th>
                    <td><?= h($activitatsDia->hora_fin) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>