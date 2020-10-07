<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InformesArquivo $informesArquivo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Informes Arquivo'), ['action' => 'edit', $informesArquivo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Informes Arquivo'), ['action' => 'delete', $informesArquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $informesArquivo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Informes Arquivos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Informes Arquivo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Informes'), ['controller' => 'Informes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Informe'), ['controller' => 'Informes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="informesArquivos view large-9 medium-8 columns content">
    <h3><?= h($informesArquivo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($informesArquivo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extensao') ?></th>
            <td><?= h($informesArquivo->extensao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Informe') ?></th>
            <td><?= $informesArquivo->has('informe') ? $this->Html->link($informesArquivo->informe->id, ['controller' => 'Informes', 'action' => 'view', $informesArquivo->informe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($informesArquivo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($informesArquivo->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($informesArquivo->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($informesArquivo->data_delecao) ?></td>
        </tr>
    </table>
</div>
