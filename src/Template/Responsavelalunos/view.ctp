<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $responsavelaluno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Responsavelaluno'), ['action' => 'edit', $responsavelaluno->aluno_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Responsavelaluno'), ['action' => 'delete', $responsavelaluno->aluno_id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsavelaluno->aluno_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Responsavelalunos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Responsavelaluno'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="responsavelalunos view large-9 medium-8 columns content">
    <h3><?= h($responsavelaluno->aluno_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aluno Id') ?></th>
            <td><?= $this->Number->format($responsavelaluno->aluno_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsavel Id') ?></th>
            <td><?= $this->Number->format($responsavelaluno->responsavel_id) ?></td>
        </tr>
    </table>
</div>
