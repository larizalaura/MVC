<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $responsavel
 */
$this->layout = 'creche/layout_creche'
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Responsavel'), ['action' => 'edit', $responsavel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Responsavel'), ['action' => 'delete', $responsavel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsavel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Responsavel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsavel'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="responsavel view large-9 medium-8 columns content">
    <h3><?= h($responsavel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($responsavel->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parentesco') ?></th>
            <td><?= h($responsavel->parentesco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($responsavel->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($responsavel->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profissao') ?></th>
            <td><?= h($responsavel->profissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($responsavel->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($responsavel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco Id') ?></th>
            <td><?= $this->Number->format($responsavel->endereco_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone Id') ?></th>
            <td><?= $this->Number->format($responsavel->telefone_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nasc') ?></th>
            <td><?= h($responsavel->data_nasc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($responsavel->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($responsavel->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($responsavel->data_delecao) ?></td>
        </tr>
    </table>
</div>
