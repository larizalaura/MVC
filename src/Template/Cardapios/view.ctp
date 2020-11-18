<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardapio $cardapio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cardapio'), ['action' => 'edit', $cardapio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cardapio'), ['action' => 'delete', $cardapio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cardapios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cardapio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cardapios view large-9 medium-8 columns content">
    <h3><?= h($cardapio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($cardapio->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Texto Cardapio') ?></th>
            <td><?= h($cardapio->texto_cardapio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nutricionista') ?></th>
            <td><?= h($cardapio->nutricionista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $cardapio->has('usuario') ? $this->Html->link($cardapio->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $cardapio->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cardapio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($cardapio->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($cardapio->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($cardapio->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($cardapio->data_delecao) ?></td>
        </tr>
    </table>
</div>
