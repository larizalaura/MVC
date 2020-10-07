<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Informe $informe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Informe'), ['action' => 'edit', $informe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Informe'), ['action' => 'delete', $informe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $informe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Informes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Informe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Informes Arquivos'), ['controller' => 'InformesArquivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Informes Arquivo'), ['controller' => 'InformesArquivos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="informes view large-9 medium-8 columns content">
    <h3><?= h($informe->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($informe->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Corpo') ?></th>
            <td><?= h($informe->corpo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $informe->has('usuario') ? $this->Html->link($informe->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $informe->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($informe->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcionario Id') ?></th>
            <td><?= $this->Number->format($informe->funcionario_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($informe->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($informe->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($informe->data_delecao) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Informes Arquivos') ?></h4>
        <?php if (!empty($informe->informes_arquivos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Extensao') ?></th>
                <th scope="col"><?= __('Informe Id') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Data Modificacao') ?></th>
                <th scope="col"><?= __('Data Delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($informe->informes_arquivos as $informesArquivos): ?>
            <tr>
                <td><?= h($informesArquivos->id) ?></td>
                <td><?= h($informesArquivos->nome) ?></td>
                <td><?= h($informesArquivos->extensao) ?></td>
                <td><?= h($informesArquivos->informe_id) ?></td>
                <td><?= h($informesArquivos->data_criacao) ?></td>
                <td><?= h($informesArquivos->data_modificacao) ?></td>
                <td><?= h($informesArquivos->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InformesArquivos', 'action' => 'view', $informesArquivos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InformesArquivos', 'action' => 'edit', $informesArquivos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InformesArquivos', 'action' => 'delete', $informesArquivos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $informesArquivos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
