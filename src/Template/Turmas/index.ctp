<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma[]|\Cake\Collection\CollectionInterface $turmas
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova Turma'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3><?= __('Turmas') ?></h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('semestre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ano_atual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub_id_turma') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('turma_ativa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_alunos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turmas as $turma): ?>
            <tr>
                <td><?= $this->Number->format($turma->id) ?></td>
                <td><?= $this->Number->format($turma->semestre) ?></td>
                <td><?= $this->Number->format($turma->ano_atual) ?></td>
                <td><?= h($turma->sub_id_turma) ?></td>
                <td><?= h($turma->periodo) ?></td>
                <td><?= h($return = $turma->turma_ativa == 1 ? "ATIVO":"INATIVO") ?></td>
                <td><?= $this->Number->format($turma->total_alunos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $turma->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $turma->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id)]) ?>
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
