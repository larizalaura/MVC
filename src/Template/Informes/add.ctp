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
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
  <?= $this->Html->css('/bower_components/iCheck/skins/flat/blue.css') ?>
  <?= $this->Html->css('/bower_components/jquery-ui-1.12.1.custom/jquery-ui.min.css') ?>
<?php $this->end(); ?>

<?php $this->start('script'); ?>   

  $(".datemask").inputmask({
    alias: "datetime",
    inputFormat: "dd/mm/yyyy"
  });

  $('.datepicker').datepicker({
    dateFormat: 'dd/mm/yy',
    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    nextText: 'Próximo',
    prevText: 'Anterior'
  });
  

  $('#funcionario-id').select2({
    theme:'bootstrap',
    placeholder: "Seleciona o funcionario"
  });

  $('#responsavel-id').select2({
    theme:'bootstrap',
    placeholder: "Seleciona o responsavel"
  });
<?php $this->end(); ?>   

<?php $this->layout = 'creche/layout_creche' ?>
<?php $this->assign('title','Novo Informe') ?>


<div class="informes form large-9 medium-8 columns content">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active heading"><?= __('Actions') ?></li>
      <li class="breadcrumb-item active"><?= $this->Html->link(__('Lista de Informes'), ['action' => 'index']) ?></li>
      <li class="breadcrumb-item active"><?= $this->Html->link(__('Lista de Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
      <li class="breadcrumb-item active"><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ol>
  </nav>

  <?= $this->Form->create($informe, array('enctype' => 'multipart/form-data')) ?>

    <div class="panel panel-default">
      <div class="panel-body">
        <fieldset>
          <div class="col-md-6">
            <?= $this->Form->control('responsavel_id', [
              'options' => $responsaveis, 
              'label'=> 'Responsável',
              ]);?>
          </div>

          <div class="col-md-6">
            <?= $this->Form->control('funcionario_id', [
              'options' => $funcionarios,
              'label'=> 'Funcionário',
              ]);?>
          </div>
            
        </fieldset>

        <fieldset>
          <div class="col-md-12">
            <?= $this->Form->control('titulo', [
              'placeholder' => 'Informe o titulo do informe',
              'label'=> 'Assunto',
              ]); ?>
          </div>

          <div class="col-md-12 form-group">
            <?= $this->Form->textarea('corpo',[
              'placeholder' => 'Insira aqui o corpo da mensagem',
              'label'=> '',
            ]); ?>
          </div>
        </fieldset>
        
        <?= $this->Form->control('informes_arquivos.nome'); ?>

        <div class="col-md-12">
          <?= $this->Form->button(__('Enviar')) ?>
        </div>

      </div>
    </div>
  </div>
  <?= $this->Form->end() ?>
</div>
