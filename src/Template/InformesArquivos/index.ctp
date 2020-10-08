<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InformesArquivo[]|\Cake\Collection\CollectionInterface $informesArquivos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Informes Arquivo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Informes'), ['controller' => 'Informes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Informe'), ['controller' => 'Informes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="informesArquivos index large-9 medium-8 columns content">
    <h3><?= __('Informes Arquivos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extensao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('informe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_modificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($informesArquivos as $informesArquivo): ?>
            <tr>
                <td><?= $this->Number->format($informesArquivo->id) ?></td>
                <td><?= h($informesArquivo->nome) ?></td>
                <td><?= h($informesArquivo->extensao) ?></td>
                <td><?= $informesArquivo->has('informe') ? $this->Html->link($informesArquivo->informe->id, ['controller' => 'Informes', 'action' => 'view', $informesArquivo->informe->id]) : '' ?></td>
                <td><?= h($informesArquivo->data_criacao) ?></td>
                <td><?= h($informesArquivo->data_modificacao) ?></td>
                <td><?= h($informesArquivo->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $informesArquivo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $informesArquivo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $informesArquivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $informesArquivo->id)]) ?>
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
