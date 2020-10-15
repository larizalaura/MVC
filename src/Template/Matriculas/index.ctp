<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula[]|\Cake\Collection\CollectionInterface $matriculas
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Nova Matricula'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="panel panel-primary">
    <div class="panel-heading"> <h3><?= __('Matriculas') ?></h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula_ativa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aluno_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ano_matricula') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matriculas as $matricula): ?>
            <tr>
                <td><?= $this->Number->format($matricula->id) ?></td>
                <td><?= h($matricula->matricula_ativa) ?></td>
                <td><?= $matricula->has('aluno') ? $this->Html->link($matricula->aluno->id, ['controller' => 'Alunos', 'action' => 'view', $matricula->aluno->id]) : '' ?></td>
                <td><?= $this->Number->format($matricula->ano_matricula) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $matricula->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matricula->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id)]) ?>
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
