<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alunos view large-9 medium-8 columns content">
    <h3><?= h($aluno->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($aluno->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome Mae') ?></th>
            <td><?= h($aluno->nome_mae) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($aluno->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($aluno->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aluno->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Aluno') ?></th>
            <td><?= $this->Number->format($aluno->id_aluno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nasc') ?></th>
            <td><?= h($aluno->data_nasc) ?></td>
        </tr>
    </table>
</div>
