<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Telefones'), ['controller' => 'Telefones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Telefone'), ['controller' => 'Telefones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Informes'), ['controller' => 'Informes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Informe'), ['controller' => 'Informes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view large-9 medium-8 columns content">
    <h3><?= h($funcionario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($funcionario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parentesco') ?></th>
            <td><?= h($funcionario->parentesco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($funcionario->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($funcionario->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profissao') ?></th>
            <td><?= h($funcionario->profissao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endereco') ?></th>
            <td><?= $funcionario->has('endereco') ? $this->Html->link($funcionario->endereco->id, ['controller' => 'Enderecos', 'action' => 'view', $funcionario->endereco->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= $funcionario->has('telefone') ? $this->Html->link($funcionario->telefone->id, ['controller' => 'Telefones', 'action' => 'view', $funcionario->telefone->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcionario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nasc') ?></th>
            <td><?= h($funcionario->data_nasc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($funcionario->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($funcionario->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($funcionario->data_delecao) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Informes') ?></h4>
        <?php if (!empty($funcionario->informes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Corpo') ?></th>
                <th scope="col"><?= __('Funcionario Id') ?></th>
                <th scope="col"><?= __('Responsavel Id') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Data Modificacao') ?></th>
                <th scope="col"><?= __('Data Delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($funcionario->informes as $informes): ?>
            <tr>
                <td><?= h($informes->id) ?></td>
                <td><?= h($informes->titulo) ?></td>
                <td><?= h($informes->corpo) ?></td>
                <td><?= h($informes->funcionario_id) ?></td>
                <td><?= h($informes->responsavel_id) ?></td>
                <td><?= h($informes->data_criacao) ?></td>
                <td><?= h($informes->data_modificacao) ?></td>
                <td><?= h($informes->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Informes', 'action' => 'view', $informes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Informes', 'action' => 'edit', $informes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Informes', 'action' => 'delete', $informes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $informes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
