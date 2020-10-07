<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Informe[]|\Cake\Collection\CollectionInterface $informes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Informe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Informes Arquivos'), ['controller' => 'InformesArquivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Informes Arquivo'), ['controller' => 'InformesArquivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="informes index large-9 medium-8 columns content">
    <h3><?= __('Informes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('corpo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funcionario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_modificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($informes as $informe): ?>
            <tr>
                <td><?= $this->Number->format($informe->id) ?></td>
                <td><?= h($informe->titulo) ?></td>
                <td><?= h($informe->corpo) ?></td>
                <td><?= $this->Number->format($informe->funcionario_id) ?></td>
                <td><?= $informe->has('usuario') ? $this->Html->link($informe->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $informe->usuario->id]) : '' ?></td>
                <td><?= h($informe->data_criacao) ?></td>
                <td><?= h($informe->data_modificacao) ?></td>
                <td><?= h($informe->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $informe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $informe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $informe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $informe->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
