<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presenca $presenca
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Presenca'), ['action' => 'edit', $presenca->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Presenca'), ['action' => 'delete', $presenca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presenca->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Presencas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Presenca'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matriculados'), ['controller' => 'Matriculados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matriculado'), ['controller' => 'Matriculados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="presencas view large-9 medium-8 columns content">
    <h3><?= h($presenca->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Matriculado') ?></th>
            <td><?= $presenca->has('matriculado') ? $this->Html->link($presenca->matriculado->id, ['controller' => 'Matriculados', 'action' => 'view', $presenca->matriculado->id]) : '' ?></td>
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
