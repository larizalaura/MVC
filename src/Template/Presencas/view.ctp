<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presenca $presenca
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Presenca'), ['action' => 'edit', $presenca->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Presenca'), ['action' => 'delete', $presenca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presenca->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Presencas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Presenca'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Turmas'), ['controller' => 'Turmas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turmas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="presencas view large-9 medium-8 columns content">
    <h3><?= h($presenca->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= $presenca->has('matricula') ? $this->Html->link($presenca->matricula->id, ['controller' => 'Matriculas', 'action' => 'view', $presenca->matricula->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Turma') ?></th>
            <td><?= $presenca->has('turma') ? $this->Html->link($presenca->turma->id, ['controller' => 'Turmas', 'action' => 'view', $presenca->turma->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($presenca->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Aula') ?></th>
            <td><?= h($presenca->data_aula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($presenca->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($presenca->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($presenca->data_delecao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Presente') ?></th>
            <td><?= $presenca->presente ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
