<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presenca[]|\Cake\Collection\CollectionInterface $presencas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Presenca'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matriculados'), ['controller' => 'Matriculados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matriculado'), ['controller' => 'Matriculados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="presencas index large-9 medium-8 columns content">
    <h3><?= __('Presencas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('matriculado_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_aula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('presente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_modificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($presencas as $presenca): ?>
            <tr>
                <td><?= $presenca->has('matriculado') ? $this->Html->link($presenca->matriculado->id, ['controller' => 'Matriculados', 'action' => 'view', $presenca->matriculado->id]) : '' ?></td>
                <td><?= h($presenca->data_aula) ?></td>
                <td><?= h($presenca->presente) ?></td>
                <td><?= h($presenca->data_criacao) ?></td>
                <td><?= h($presenca->data_modificacao) ?></td>
                <td><?= h($presenca->data_delecao) ?></td>
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
