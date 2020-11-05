<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matriculado[]|\Cake\Collection\CollectionInterface $matriculados
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Cadastrar novo aluno em turma'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="panel panel-primary">
    <div class="panel-heading"><h3><?= __('Matriculados') ?></h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('turmas_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matriculados as $matriculado): ?>
            <tr>
                <td><?= $this->Number->format($matriculado->id) ?></td>
                <td><?= $matriculado->has('matricula') ? $this->Html->link($matriculado->matricula->id, ['controller' => 'Matriculas', 'action' => 'view', $matriculado->matricula->id]) : '' ?></td>
                <td><?= $matriculado->has('turma') ? $this->Html->link($matriculado->turma->id, ['controller' => 'Turmas', 'action' => 'view', $matriculado->turma->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $matriculado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matriculado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matriculado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matriculado->id)]) ?>
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
