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

  $('#transferencia-de').select2({
    theme:'bootstrap',
    placeholder: "Seleciona o resultado"
  });

  $('#transferencia-para').select2({
    theme:'bootstrap',
    placeholder: "Seleciona o resultado"
  });

  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });

  $('input:radio[name="localizacao_tb"]').filter('[id="localizacao-tb-0"]').iCheck('check');

  $('#unidade-outra-destinataria-div').hide();
  $("#outra-unidade").on('ifChecked',function(event){
    $('#unidade-outra-destinataria-div').show();
    $('#unidade-destinataria-div').hide();
  });
  $("#outra-unidade").on('ifUnchecked',function(event){
    $('#unidade-outra-destinataria-div').hide();
    $('#unidade-destinataria-div').show();
  });

<?php $this->end(); ?>   

<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Edição do Cadastro da Transferência') ?>

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
                <b>Informações da Transferência</b> 
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3">
                    <?= $this->Form->input('data_registro_resultado',['label'=>'Data do registro do resultado','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>','disabled'=>true]); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('confirmacao',['label'=>'Transferência confirmada?','type'=>'radio','name'=>'localizacao_tb','options'=>['Sim','Não'],'class'=>'radio radio-inline']); ?>
                  </div>
                  <div class="col-md-4">
                    <label><b>Unidade Destinataria não Cadastrada?</b></label>
                    <?= $this->Form->input('outra_unidade',['label'=>' Sim','type'=>'checkbox']); ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <?= $this->Form->input('data_transferencia',['label'=>'Data da transferência','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('unidade',['label'=>'Unidade Remetente',
                    'options'=>['RS001 - CDT001 - CT001',
                                'RS001 - CDT001 - CT002',
                                'RS001 - CDT001 - CT003',
                                'RS001 - CDT001 - CT004',
                                'RS001 - CDT002 - CT005',
                                'RS001 - CDT002 - CT006',
                                'RS001 - CDT002 - CT007',
                                'RS002 - CDT003 - CT008',
                                'RS002 - CDT003 - CT009'],'id'=>'transferencia-de','empty'=>'-']); ?>
                  </div>
                  <div class="col-md-4" id="unidade-destinataria-div">
                    <?= $this->Form->input('unidade',['label'=>'Unidade Destinatária',
                    'options'=>['RS001 - CDT001 - CT001',
                                'RS001 - CDT001 - CT002',
                                'RS001 - CDT001 - CT003',
                                'RS001 - CDT001 - CT004',
                                'RS001 - CDT002 - CT005',
                                'RS001 - CDT002 - CT006',
                                'RS001 - CDT002 - CT007',
                                'RS002 - CDT003 - CT008',
                                'RS002 - CDT003 - CT009'],'id'=>'transferencia-para','empty'=>'-']); ?>
                  </div>
                  <div class="col-md-4" id="unidade-outra-destinataria-div">
                    <?= $this->Form->input('unidade_outra_destinataria',['label'=>' Unidade Destinataria Não Cadastrada','type'=>'text','class'=>'input-sm']); ?>
                  </div>
                  
                  <div class="col-md-1">
                    <br>
                    <button type="button" data-toggle="modal" data-target="#modalAdicionarTransferencia" class="btn btn-primary " title="Adicionar transferência" id="adicionar-transferencia"><i class="fas fa-plus fa-lg"></i></button>
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

<div class="row">
  <div class="col-md-3 col-md-offset-9">
    <button type="button" class="btn btn-block btn-lg btn-primary">
      <b>Salvar</b>
    </button>
  </div>
</div>



<div class="modal modal-success fade" tabindex="-1" role="dialog" id="modalAdicionarTransferencia">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Confirmação da edição da transferência</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <dl class="dl-horizontal">
              <dt>Data da transferẽncia</dt>
                <dd>01/07/2019</dd>
              <dt>Unidade Remetente</dt>
                <dd>BRS001 - CDT001 - CT003</dd>
              <dt>Unidade Destinatária</dt>
                <dd>BRS001 - CDT001 - CT004</dd>
              <dt>Confirmação</dt>
                <dd>Sim</dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline" data-dismiss="modal">Confirmar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div><!-- /.modal -->
