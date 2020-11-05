<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsavei $responsavei
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Responsavei'), ['action' => 'edit', $responsavei->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Responsavei'), ['action' => 'delete', $responsavei->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsavei->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Responsaveis'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsavei'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="responsaveis view large-9 medium-8 columns content">
    <h3><?= h($responsavei->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($responsavei->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('parentesco') ?></th>
            <td><?= h($responsavei->parentesco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($responsavei->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('rg') ?></th>
            <td><?= h($responsavei->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('profissao') ?></th>
            <td><?= h($responsavei->profissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('telefone') ?></th>
            <td><?= h($responsavei->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('email') ?></th>
            <td><?= h($responsavei->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $responsavei->has('usuario') ? $this->Html->link($responsavei->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $responsavei->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($responsavei->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($responsavei->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($responsavei->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($responsavei->data_delecao) ?></td>
        </tr>
    </table>
</div>
