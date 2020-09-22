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

<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Cadastro da Observação no Tratamento ') ?>

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
                <b>Observações</b> 
              </div>
              <div class='panel-body'>
                <div class="row">
                  <div class="col-md-1">
                      <i class="fas fa-comment-medical" style="font-size:400%"></i>
                  </div>
                  <div class="col-md-9">
                      <span class="username"><b>Usuário:</b> Usuário 1</span><br>
                      <span class="username"><b>Unidade:</b> Unidade 1</span>
                      <?= $this->Form->input('Nova observação', ['type' => 'textarea',
                      'value'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.']); ?>
                  </div>
                  <div class="col-md-1 col-md-offset-1">
                    <br>
                    <span class="text-muted pull-right"><?=date('h:i d/m/Y')?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 col-md-offset-9">
                    <button type="button" class="btn btn-block btn btn-primary">
                        <b>Editar Observação</b>
                    </button>
                  </div>
                </div>
              </div> 
            </div>
          <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3">
      <?= $this->Html->link('<i class="fas fa-undo-alt"></i>Voltar',['controller'=>'pages','action'=>'prototipo/tratamento/adicionar_observacao_tb'],['escape'=>false,'class'=>'btn btn-block btn-default']) ?>
    </div>
  </div>
</div>    

