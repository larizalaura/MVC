<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */

$this->layout = 'creche/layout_creche'?>

<?php $this->start('scriptLib'); ?>
    <?= $this->Html->script('//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') ?>
    <?= $this->Html->script('dt-teste.js') ?>
<?php $this->end(); ?>

<?php $this->start('css'); ?>
  <?= $this->Html->css('//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css') ?>
<?php $this->end(); ?>

<div class="panel panel-primary">
    <div class="panel-heading"><h3><?= __('Alunos') ?></h3></div>
        <table id="example" class="table" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data Nascimento</th>
                    <th>Telefone</th>
                    <th>Sexo</th>
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
                </tr>
                <?php endforeach; ?>
            </tbody>
                
        </table>
    </div>
</div>


