<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matriculado $matriculado
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Matriculado'), ['action' => 'edit', $matriculado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Matriculado'), ['action' => 'delete', $matriculado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matriculado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matriculados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matriculado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Turmas'), ['controller' => 'Turmas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turmas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matriculados view large-9 medium-8 columns content">
    <h3><?= h($matriculado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Matricula') ?></th>
            <td><?= $matriculado->has('matricula') ? $this->Html->link($matriculado->matricula->id, ['controller' => 'Matriculas', 'action' => 'view', $matriculado->matricula->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Turma') ?></th>
            <td><?= $matriculado->has('turma') ? $this->Html->link($matriculado->turma->id, ['controller' => 'Turmas', 'action' => 'view', $matriculado->turma->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($matriculado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($matriculado->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($matriculado->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($matriculado->data_delecao) ?></td>
        </tr>
    </table>
</div>
