<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Informe $informe
 */
?>
<?php $this->start('scriptLib'); ?>
  <?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
  <?= $this->Html->script('/bower_components/iCheck/icheck.js') ?>
  <?= $this->Html->script('/vendor/almasaeed2010/adminlte/bower_components/inputmask/dist/inputmask/inputmask.js') ?>
  <?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
  <?= $this->Html->script('/bower_components/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
  <?= $this->Html->css('/bower_components/css/default.css') ?>
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
  <?= $this->Html->css('/bower_components/iCheck/skins/flat/blue.css') ?>
  <?= $this->Html->css('/bower_components/jquery-ui-1.12.1.custom/jquery-ui.min.css') ?>
<?php $this->end(); ?>
<?php $this->start('script'); ?>   
<?php $this->end(); ?>

<?php $this->layout = 'creche/layout_creche' ?>

<div class="informes form large-9 medium-8 columns content">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active heading"><?= __('Actions') ?></li>
            <li class="breadcrumb-item active"><?= $this->Html->link(__('Novo Informe'), ['action' => 'add']) ?></li>
            <li class="breadcrumb-item active"><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
            <li class="breadcrumb-item active"><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        </ol>
    </nav>

    <div class="panel panel-primary">
        <div class="panel-heading" ><h3><?= __('Listagem de Informes') ?></h3></div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('corpo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('funcionario_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('responsavel_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('data_modificacao') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('data_delecao') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($informes as $informe): ?>
                <tr>
                    <td><?= $this->Number->format($informe->id) ?></td>
                    <td><?= h($informe->titulo) ?></td>
                    <td><?= h($informe->corpo) ?></td>
                    <td><?= $informe->has('funcionarios_usuario') ?$this->Html->link($informe->funcionarios_usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $informe->funcionario_id]) : '' ?></td>
                    <td><?= $informe->has('responsaveis_usuario') ? $this->Html->link($informe->responsaveis_usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $informe->responsavel_id]) : '' ?></td>
                    <td><?= h($informe->data_criacao) ?></td>
                    <td><?= h($informe->data_modificacao) ?></td>
                    <td><?= h($informe->data_delecao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(
                            __('View'), 
                            ['action' => 'view', $informe->id],
                            ['class' => array('btn', 'btn-sm', 'btn-info'), 'style'=>array('color:#FFF')]
                        ) ?>
                        <?= $this->Html->link(
                            __('Edit'), 
                            ['action' => 'edit', $informe->id],
                            ['class' => array('btn', 'btn-sm', 'btn-success'), 'style'=>array('color:#FFF')]
                        ) ?>
                        <?= $this->Form->postLink(
                            __('Delete'), 
                            ['action' => 'delete', $informe->id], 
                            ['class' => array('btn', 'btn-sm', 'btn-danger'), 'style'=>array('color:#FFF')],
                            ['confirm' => __('Are you sure you want to delete # {0}?',  $informe->id)]
                        )?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator" style="margin: auto 1em;">
            <ul class="pagination" >
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div>
</div>
