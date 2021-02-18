<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $responsavel
 */
$this->layout = 'creche/layout_creche'
?>

<div class="panel panel-primary">
<div class="panel-heading"><h3><?= __('Responsaveis Cadastrados') ?></h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nasc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parentesco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profissao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endereco_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($responsavel as $responsavel): ?>
            <tr>
                <td><?= $this->Number->format($responsavel->id) ?></td>
                <td><?= h($responsavel->nome) ?></td>
                <td><?= h($responsavel->data_nasc) ?></td>
                <td><?= h($responsavel->parentesco) ?></td>
                <td><?= h($responsavel->cpf) ?></td>
                <td><?= h($responsavel->rg) ?></td>
                <td><?= h($responsavel->profissao) ?></td>
                <td><?= h($responsavel->email) ?></td>
                <td><?= $this->Number->format($responsavel->endereco_id) ?></td>
                <td><?= $this->Number->format($responsavel->telefone_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $responsavel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $responsavel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $responsavel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $responsavel->id)]) ?>
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
