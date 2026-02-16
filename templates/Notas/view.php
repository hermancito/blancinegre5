<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Nota $nota
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Nota'), ['action' => 'edit', $nota->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Nota'), ['action' => 'delete', $nota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nota->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Nota'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="notas view content">
            <h3><?= h($nota->label) ?></h3>
            <table>
                <tr>
                    <th><?= __('Alumno') ?></th>
                    <td><?= $nota->hasValue('alumno') ? $this->Html->link($nota->alumno->codigo, ['controller' => 'Alumnos', 'action' => 'view', $nota->alumno->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Comodin') ?></th>
                    <td><?= h($nota->comodin) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $nota->hasValue('user') ? $this->Html->link($nota->user->email, ['controller' => 'Users', 'action' => 'view', $nota->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= $nota->hasValue('activitat') ? $this->Html->link($nota->activitat->nombre, ['controller' => 'Activitats', 'action' => 'view', $nota->activitat->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso') ?></th>
                    <td><?= h($nota->curso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Objetivos') ?></th>
                    <td><?= h($nota->objetivos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contenidos') ?></th>
                    <td><?= h($nota->contenidos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Atencion') ?></th>
                    <td><?= h($nota->atencion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Participa') ?></th>
                    <td><?= h($nota->participa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ejerc') ?></th>
                    <td><?= h($nota->ejerc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Asist') ?></th>
                    <td><?= h($nota->asist) ?></td>
                </tr>
                <tr>
                    <th><?= __('Actitud') ?></th>
                    <td><?= h($nota->actitud) ?></td>
                </tr>
                <tr>
                    <th><?= __('Respeto') ?></th>
                    <td><?= h($nota->respeto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($nota->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cuatrim') ?></th>
                    <td><?= $nota->cuatrim === null ? '' : $this->Number->format($nota->cuatrim) ?></td>
                </tr>
                <tr>
                    <th><?= __('Anyo') ?></th>
                    <td><?= $nota->anyo === null ? '' : $this->Number->format($nota->anyo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($nota->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($nota->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validado') ?></th>
                    <td><?= $nota->validado ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Comentarios Boletin') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($nota->comentarios_boletin)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Contenidos Boletin') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($nota->contenidos_boletin)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>