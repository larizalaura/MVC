<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aluno'), ['action' => 'edit', $aluno->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aluno'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alunos view large-9 medium-8 columns content">
    <h3><?= h($aluno->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($aluno->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($aluno->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($aluno->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aluno->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nasc') ?></th>
            <td><?= h($aluno->data_nasc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($aluno->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($aluno->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($aluno->data_delecao) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Matriculas') ?></h4>
        <?php if (!empty($aluno->matriculas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Matricula Ativa') ?></th>
                <th scope="col"><?= __('Aluno Id') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Data Modificacao') ?></th>
                <th scope="col"><?= __('Data Delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($aluno->matriculas as $matriculas): ?>
            <tr>
                <td><?= h($matriculas->id) ?></td>
                <td><?= h($matriculas->matricula_ativa) ?></td>
                <td><?= h($matriculas->aluno_id) ?></td>
                <td><?= h($matriculas->data_criacao) ?></td>
                <td><?= h($matriculas->data_modificacao) ?></td>
                <td><?= h($matriculas->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Matriculas', 'action' => 'view', $matriculas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Matriculas', 'action' => 'edit', $matriculas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matriculas', 'action' => 'delete', $matriculas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matriculas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
