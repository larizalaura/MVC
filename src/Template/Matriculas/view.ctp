<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula $matricula
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Matricula'), ['action' => 'edit', $matricula->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Matricula'), ['action' => 'delete', $matricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matriculas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matricula'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['controller' => 'Alunos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Alunos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matriculados'), ['controller' => 'Matriculados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matriculado'), ['controller' => 'Matriculados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Presencas'), ['controller' => 'Presencas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Presenca'), ['controller' => 'Presencas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="matriculas view large-9 medium-8 columns content">
    <h3><?= h($matricula->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aluno') ?></th>
            <td><?= $matricula->has('aluno') ? $this->Html->link($matricula->aluno->id, ['controller' => 'Alunos', 'action' => 'view', $matricula->aluno->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($matricula->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ano Matricula') ?></th>
            <td><?= $this->Number->format($matricula->ano_matricula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Criacao') ?></th>
            <td><?= h($matricula->data_criacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Modificacao') ?></th>
            <td><?= h($matricula->data_modificacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Delecao') ?></th>
            <td><?= h($matricula->data_delecao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricula Ativa') ?></th>
            <td><?= $matricula->matricula_ativa ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Matriculados') ?></h4>
        <?php if (!empty($matricula->matriculados)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Matricula Id') ?></th>
                <th scope="col"><?= __('Turmas Id') ?></th>
                <th scope="col"><?= __('Data Criacao') ?></th>
                <th scope="col"><?= __('Data Modificacao') ?></th>
                <th scope="col"><?= __('Data Delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($matricula->matriculados as $matriculados): ?>
            <tr>
                <td><?= h($matriculados->id) ?></td>
                <td><?= h($matriculados->matricula_id) ?></td>
                <td><?= h($matriculados->turmas_id) ?></td>
                <td><?= h($matriculados->data_criacao) ?></td>
                <td><?= h($matriculados->data_modificacao) ?></td>
                <td><?= h($matriculados->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Matriculados', 'action' => 'view', $matriculados->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Matriculados', 'action' => 'edit', $matriculados->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matriculados', 'action' => 'delete', $matriculados->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matriculados->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Presencas') ?></h4>
        <?php if (!empty($matricula->presencas)): ?>
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
            <?php foreach ($matricula->presencas as $presencas): ?>
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
