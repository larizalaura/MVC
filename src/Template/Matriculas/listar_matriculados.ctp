<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula[]|\Cake\Collection\CollectionInterface $matriculas
 */
?>

<?php $this->layout = 'creche/layout_creche'?>

<div class="panel panel-primary">
    <div class="panel-heading" ><h3><?= __('Matriculados') ?></h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Status_Matricula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Aluno_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome_Aluno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data_de_Nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ano_da_Matricula') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($matriculas as $matricula): ?>
            <tr>
                <td><?= $this->Number->format($matricula->id) ?></td>
                <td><?= h($result = $matricula->matricula_ativa == 1 ? "ATIVO":"INATIVO") ?></td>
                <td><?= $matricula->has('aluno_id') ? $this->Html->link($matricula->aluno_id, ['controller' => 'Alunos', 'action' => 'view', $matricula->aluno_id]) : '' ?></td>
                <td><?= h($matricula->nome) ?></td>
                <td><?= h($matricula->sexo) ?></td>
                <td><?= h($matricula->data_nasc) ?></td>
                <td><?= h($matricula->ano_matricula) ?></td>

                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $matricula->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matricula->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id)]) ?> 
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>