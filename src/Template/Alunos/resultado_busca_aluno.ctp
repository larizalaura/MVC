<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>

<?php $this->layout = 'creche/layout_creche'?>

<div class="panel panel-primary">
    <div class="panel-heading" ><h3><?= __('Resultado') ?></h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nasc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= $this->Number->format($aluno->id) ?></td>
                <td><?= h($aluno->nome) ?></td>
                <td><?= h($aluno->data_nasc) ?></td>
                <td><?= h($aluno->telefone) ?></td>
                <td><?= h($aluno->sexo) ?></td>
                <!-- <td><?= h($aluno->data_criacao) ?></td>
                <td><?= h($aluno->data_modificacao) ?></td>
                <td><?= h($aluno->data_delecao) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>