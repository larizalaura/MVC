<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>
<?php $this->start('scriptLib'); ?>
  <?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
  <?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
<?php $this->end(); ?>

<?php $this->layout = 'creche/layout_creche'?>

<?php $teste = "teste" ?>

<?php $this->start('script'); ?>
$('#datamask-nasc').inputmask({
    alias: "datetime",
    inputFormat: "dd/mm/yy"
  });
<?php $this->end(); ?>


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
                <td><span id="datamask-nasc"><?= h($aluno->data_nasc) ?></span></td>
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