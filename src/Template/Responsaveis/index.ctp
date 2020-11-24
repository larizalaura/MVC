<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsavei[]|\Cake\Collection\CollectionInterface $responsaveis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Responsavei'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsaveis index large-9 medium-8 columns content">
    <h3><?= __('Responsaveis') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nasc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parentesco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aluno_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_modificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($responsaveis as $responsavei): ?>
            <tr>
                <td><?= $this->Number->format($responsavei->id) ?></td>
                <td><?= h($responsavei->nome) ?></td>
                <td><?= h($responsavei->data_nasc) ?></td>
                <td><?= h($responsavei->parentesco) ?></td>
                <td><?= h($responsavei->cpf) ?></td>
                <td><?= h($responsavei->rg) ?></td>
                <td><?= h($responsavei->profissao) ?></td>
                <td><?= h($responsavei->email) ?></td>
                <td><?= $this->Number->format($responsavei->endereco_id) ?></td>
                <td><?= $this->Number->format($responsavei->aluno_id) ?></td>
                <td><?= $this->Number->format($responsavei->telefone_id) ?></td>
                <td><?= h($responsavei->data_criacao) ?></td>
                <td><?= h($responsavei->data_modificacao) ?></td>
                <td><?= h($responsavei->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $responsavei->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsavei->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsavei->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsavei->id)]) ?>
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
