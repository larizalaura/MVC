<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardapio[]|\Cake\Collection\CollectionInterface $cardapios
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

  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });

  $('input:radio[name="continua_internado"]').filter('[id="continua-internado-1"]').iCheck('check');

<?php $this->end(); ?> 

<?php $this->layout = 'creche/layout_creche' ?>
<?php $this->assign('title','Cadastro da Internação') ?>

<div class="nav-tabs-custom">
  <div class="panel panel-default">
    <div class="panel-body">
      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="socio_demograficas">
          <?= $this->Form->create('paciente'); ?>
            <div class="panel panel-default panel-primary">
              <div class="panel-heading">
                <b>Informações de Identificação do Paciente</b>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <dl class="dl-horizontal">
                      <dt>Data Registro</dt>
                        <dd>01/01/2019</dd>
                      <dt>Unidade de Registro</dt>
                        <dd>Unidade 1</dd>
                      <dt>Nome do paciente</dt>
                        <dd>Paciente 1</dd>
                    </dl>
                  </div>
                  <div class="col-md-6">
                    <dl class="dl-horizontal">
                      <dt>Nº do Paciente</dt>
                        <dd>000001</dd>
                      <dt>Identificação</dt>
                        <dd>20190101001000001</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default panel-primary">
              <div class="panel-heading">
                <b>Internações referente ao tratamento</b> 
              </div>
              <div class='panel-body'>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-condensed table-striped">
                      <thead>
                        <tr>
                          <th>Ação</th>
                          <th>Data da Internação</th>
                          <th>Unidade de Internação</th>
                          <th>Fase do Tratamento</th>
                          <th>Continua Internado?</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?= $this->Html->link('<i class="fas fa-edit" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/editar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Editar Internação']) ?>
                          <button type="button" data-toggle="modal" data-target="#modalRemoverInternacao" class="btn btn-default btn-xs" title="Remover Internação" id="remover-internacao"><i class="fas fa-trash-alt" style="font-size:13px;color:#216376"></i></button></td>
                          <td>01/05/2019</td>
                          <td>Unidade Hospitalar 1</td>
                          <td>Intensivo</td>
                          <td>Não</td>
                        </tr>
                        <tr>
                          <td><?= $this->Html->link('<i class="fas fa-edit" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/editar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Editar Internação']) ?>
                          <button type="button" data-toggle="modal" data-target="#modalRemoverInternacao" class="btn btn-default btn-xs" title="Remover Internação" id="remover-internacao"><i class="fas fa-trash-alt" style="font-size:13px;color:#216376"></i></button></td>
                          <td>01/06/2019</td>
                          <td>Unidade Hospitalar 2</td>
                          <td>Manutenção</td>
                          <td>Não</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div> 
            </div>
            <div class="panel panel-default panel-primary">
              <div class="panel-heading">
                <b>Cadastro de Internação</b> 
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3">
                    <?= $this->Form->input('data_registro_internacao',['label'=>'Data do registro da internação','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>','disabled'=>true]); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('fase_tratamento',['label'=>'Fase do Tratamento','type'=>'radio','name'=>'fase_tratamento','options'=>['Intensiva','Manutenção'],'class'=>'radio radio-inline']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('continua_internado',['label'=>'Continua internado?','type'=>'radio','name'=>'continua_internado','options'=>['Sim','Não'],'class'=>'radio radio-inline']); ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <?= $this->Form->input('data_internacao',['label'=>'Data de internação','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
                  </div>
                  <div class="col-md-6">
                    <?= $this->Form->input('unidade_internacao',['label'=>'Unidade de internação','type'=>'text','class'=>'input-sm','id'=>'unidade-internacao']); ?>
                  </div>
                  <div class="col-md-2">
                    <br>
                    <button type="button" data-toggle="modal" data-target="#modalAdicionarInternacao" class="btn btn-primary btn-block" title="Adicionar Internacao" id="adicionar-transferencia"><i class="fas fa-plus fa-lg"></i></button>
                  </div>
                </div>
              </div>
            </div>
          <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
</div>    