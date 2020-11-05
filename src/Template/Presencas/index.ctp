<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presenca[]|\Cake\Collection\CollectionInterface $presencas
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nova Presenca'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="panel panel-primary">
    <div class="panel-heading"><h3><?= __('Presencas') ?></h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricula_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('turma_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_aula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presente') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($presencas as $presenca): ?>
            <tr>
                <td><?= $this->Number->format($presenca->id) ?></td>
                <td><?= $presenca->has('matricula') ? $this->Html->link($presenca->matricula->id, ['controller' => 'Matriculas', 'action' => 'view', $presenca->matricula->id]) : '' ?></td>
                <td><?= $presenca->has('turma') ? $this->Html->link($presenca->turma->id, ['controller' => 'Turmas', 'action' => 'view', $presenca->turma->id]) : '' ?></td>
                <td><?= h($presenca->data_aula) ?></td>
                <td><?= h($presenca->presente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $presenca->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $presenca->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $presenca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $presenca->id)]) ?>
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
