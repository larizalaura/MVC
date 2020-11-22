<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $telefone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Telefone'), ['action' => 'edit', $telefone->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Telefone'), ['action' => 'delete', $telefone->id], ['confirm' => __('Are you sure you want to delete # {0}?', $telefone->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Telefones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Telefone'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="telefones view large-9 medium-8 columns content">
    <h3><?= h($telefone->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($telefone->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($telefone->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($telefone->id) ?></td>
        </tr>
    </table>
</div>
