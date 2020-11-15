<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */

$this->layout = 'creche/layout_creche'?>

<?php $this->start('scriptLib'); ?>
  <?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
  <?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
<?php $this->end(); ?>

<?php $this->start('script'); ?>


$('.busca-aluno').select2({
    theme: 'bootstrap',
    ajax:{
        url: "<?= $this->Url->build(['controller'=>'Alunos','action'=>'get_aluno','_ext'=>'json'], true); ?>",
        dataType: 'json',
        data: function(params){
            console.log(params);
            return {
                q: params.term,
                page: params.page,
            };
        },
        processResults: function(data, params){
            console.log(data);
            var nomes = data.alunos.map( item => { return {id: item['id'], text: item['nome']}});
            return {
                results: nomes,
            }
            console.log(data);
        }
    },
    minimumInputLength: 3
});

<?php $this->end(); ?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Novo Aluno'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create(null, ['type' => 'post']) ?>
    <legend><?= __('Pesquisar Aluno') ?></legend>
    <fieldset>
        <?php
        echo $this->Form->input('pesquisar', ['class' => 'busca-aluno', 'id' => 'pesquisar-aluno']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Pesquisar')) ?>
    <?= $this->Form->end() ?>
    <br>
</div>

<div class="panel panel-primary">
    <div class="panel-heading"><h3><?= __('Alunos') ?></h3></div>
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
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $aluno->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aluno->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]) ?>
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
