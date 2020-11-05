<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Turma'), ['action' => 'edit', $turma->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turma'), ['action' => 'delete', $turma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Turmas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turma'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Presencas'), ['controller' => 'Presencas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Presenca'), ['controller' => 'Presencas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turmas view large-9 medium-8 columns content">
    <h3><?= h($turma->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sub Id Turma') ?></th>
            <td><?= h($turma->sub_id_turma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= h($turma->periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($turma->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Semestre') ?></th>
            <td><?= $this->Number->format($turma->semestre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ano Atual') ?></th>
            <td><?= $this->Number->format($turma->ano_atual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Alunos') ?></th>
            <td><?= $this->Number->format($turma->total_alunos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($turma->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($turma->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($turma->data_delecao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Turma Ativa') ?></th>
            <td><?= $turma->turma_ativa ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Presencas') ?></h4>
        <?php if (!empty($turma->presencas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Matricula Id') ?></th>
                <th scope="col"><?= __('Turma Id') ?></th>
                <th scope="col"><?= __('Data Aula') ?></th>
                <th scope="col"><?= __('Presente') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Data Modificacao') ?></th>
                <th scope="col"><?= __('Data Delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($turma->presencas as $presencas): ?>
            <tr>
                <td><?= h($presencas->id) ?></td>
                <td><?= h($presencas->matricula_id) ?></td>
                <td><?= h($presencas->turma_id) ?></td>
                <td><?= h($presencas->data_aula) ?></td>
                <td><?= h($presencas->presente) ?></td>
                <td><?= h($presencas->data_criacao) ?></td>
                <td><?= h($presencas->data_modificacao) ?></td>
                <td><?= h($presencas->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Presencas', 'action' => 'view', $presencas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Presencas', 'action' => 'edit', $presencas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Presencas', 'action' => 'delete', $presencas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presencas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
