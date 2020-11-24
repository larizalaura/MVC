<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $responsavelalunos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Responsavelaluno'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsavelalunos index large-9 medium-8 columns content">
    <h3><?= __('Responsavelalunos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('aluno_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($responsavelalunos as $responsavelaluno): ?>
            <tr>
                <td><?= $this->Number->format($responsavelaluno->aluno_id) ?></td>
                <td><?= $this->Number->format($responsavelaluno->responsavel_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $responsavelaluno->aluno_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsavelaluno->aluno_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsavelaluno->aluno_id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsavelaluno->aluno_id)]) ?>
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
