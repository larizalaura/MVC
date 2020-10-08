<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dado $dado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dado'), ['action' => 'edit', $dado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dado'), ['action' => 'delete', $dado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Testes'), ['controller' => 'Testes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Testis'), ['controller' => 'Testes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dados view large-9 medium-8 columns content">
    <h3><?= h($dado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Campo') ?></th>
            <td><?= h($dado->campo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Outro') ?></th>
            <td><?= h($dado->outro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Testis') ?></th>
            <td><?= $dado->has('testis') ? $this->Html->link($dado->testis->id, ['controller' => 'Testes', 'action' => 'view', $dado->testis->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dado->id) ?></td>
        </tr>
    </table>
</div>
