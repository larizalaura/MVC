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

  Inputmask("999999").mask($('.numero-paciente-mask'));

  Inputmask("999999999999999").mask($('.identificacao'));

  Inputmask("999").mask($('.duracao-mask'));

  Inputmask("99").mask($('.quantidade-mask'));

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

  $('#unidade').select2({
    theme:'bootstrap',
    placeholder: "Seleciona a unidade",
  });

  $('#categoria').select2({
    theme:'bootstrap',
    placeholder: "Seleciona a unidade",
  });

  
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });
  
  $('input:radio[name="iCheck"]').filter('[id="icheck-0"]').iCheck('check');
  $('input:radio[name="localizacao_tb"]').filter('[id="localizacao-tb-0"]').iCheck('check');
  $('input:radio[name="forma_diagnostico"]').filter('[id="forma-diagnostico-0"]').iCheck('check');
  $('input:radio[name="classificao_caso"]').filter('[id="classificao-caso-0"]').iCheck('check');
  $('input:radio[name="tipo_tratamento"]').filter('[id="tipo-tratamento-0"]').iCheck('check');
  $('input:radio[name="apresentacao_paciente_unidade"]').filter('[id="apresentacao-paciente-unidade-0"]').iCheck('check');
  $('input:radio[name="contato_tb_antes"]').filter('[id="contato-tb-antes-0"]').iCheck('check');


  $('#outra-profissao-text').hide();   
  $("#outra-profissao").on('ifChanged',function(event){
    if(event.target.checked){
      $('#outra-profissao-text').show();
    } else {
      $('#outra-profissao-text').hide();
    }
  });

  //-----------------------------------------------
  //Contatos doente
  $('#criancas-mesma-moradia-div').hide();
  $('#criancas-mesma-casa-div').hide();
  $('#criancas-casa-vizinha-div').hide();   
  


  $("#vive-mesma-moradia").change(function(){
    var count = ($("#vive-mesma-moradia").val().match(/_/g) || []).length;
    var v = $("#vive-mesma-moradia").val().replace('_','');
    if(v!=""){
      for(i=0;i<count;i++){
        v = "0"+v;
      }
    }
    $("#vive-mesma-moradia").val(v);
    if($("#vive-mesma-moradia").val()>0){
      $('#criancas-mesma-moradia-div').show();
    } else {
      $('#criancas-mesma-moradia-div').hide();
    }
  });

  $("#pessoas-mesma-casa").change(function(){
    var count = ($("#pessoas-mesma-casa").val().match(/_/g) || []).length;
    var v = $("#pessoas-mesma-casa").val().replace('_','');
    if(v!=""){
      for(i=0;i<count;i++){
        v = "0"+v;
      }
    }
    $("#pessoas-mesma-casa").val(v);
    if($("#pessoas-mesma-casa").val()>0){
      $('#criancas-mesma-casa-div').show();
    } else {
      $('#criancas-mesma-casa-div').hide();
    }
  });

  $("#pessoas-casa-vizinha").change(function(){
    var count = ($("#pessoas-casa-vizinha").val().match(/_/g) || []).length;
    var v = $("#pessoas-casa-vizinha").val().replace('_','');
    if(v!=""){
      for(i=0;i<count;i++){
        v = "0"+v;
      }
    }
    $("#pessoas-casa-vizinha").val(v);
    if($("#pessoas-casa-vizinha").val()>0){
      $('#criancas-casa-vizinha-div').show();
    } else {
      $('#criancas-casa-vizinha-div').hide();
    }
  });

<?php $this->end(); ?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <b>Informações de Identificação do Paciente</b>
    <button type="button" data-toggle="modal" data-target="#modalBuscarPaciente" class="btn btn-default btn-sm"><i
                  class="fas fa-search"></i> Buscar Paciente</button>
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



<?= $this->Form->create('paciente'); ?>
<div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <b>Informações do Tratamento</b> 
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-4">
        <?= $this->Form->input('data_registro',['label'=>'Data de registro do tratamento','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>','disabled'=>true]); ?>
      </div>
      <div class="col-md-8">
        <?= $this->Form->input('unidade',['label'=>'Região Sanitária - CDT - CT',
        'options'=>['RS001 - CDT001 - CT001',
                    'RS001 - CDT001 - CT002',
                    'RS001 - CDT001 - CT003',
                    'RS001 - CDT001 - CT004',
                    'RS001 - CDT002 - CT005',
                    'RS001 - CDT002 - CT006',
                    'RS001 - CDT002 - CT007',
                    'RS002 - CDT003 - CT008',
                    'RS002 - CDT003 - CT009'],'id'=>'unidade']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <?= $this->Form->input('duracao_sintomas',['label'=>'Duração de sintomas','class'=>'input-sm duracao-mask','append'=>'dias']); ?>
      </div>
      <div class="col-md-4">
        <?= $this->Form->input('data_confirmacao',['label'=>'Data de confirmação do diagnóstico','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
      </div>
      <div class="col-md-4">
        <?= $this->Form->input('data_inicio_tratamento',['label'=>'Data de início do tratamento','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <?= $this->Form->input('categoria',['label'=>'Categoria (I&III/II)','options'=>['Categoria I','Categoria II', 'Categoria III'],'id'=>'categoria']); ?>
      </div>
      <div class="col-md-8">
        <?= $this->Form->input('responsavel_unidade',['label'=>'Nome de responsável de CDT/CT','class'=>'input-sm']); ?>
      </div>
    </div>
   
    <div class="box box-default color-palette-box">
      <div class="row">
        <div class="col-md-6">
          <?= $this->Form->input('localizacao_tb',['label'=>'Localização de TB','type'=>'radio','name'=>'localizacao_tb','options'=>['Pulmonar','Extra Pulmonar']]); ?>
        </div>
        <div class="col-md-6">
          <?= $this->Form->input('forma_diagnostico',['label'=>'Forma de diagnóstico','type'=>'radio','name'=>'forma_diagnostico','options'=>['Confirmado bacteriologicamente','Diagnosticado clinicalmente']]); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <?= $this->Form->input('classificao_caso',['label'=>'Classificação de caso','type'=>'radio','name'=>'classificao_caso','options'=>['Caso novo','Recaída','Já tratado (excepto recaída']]); ?>
        </div>
        <div class="col-md-6">
          <?= $this->Form->input('tipo_tratamento',['label'=>'Tipo de tratamento','type'=>'radio','name'=>'tipo_tratamento','options'=>['Autoadministrado','Supervisionado (DOT de centro)','Supervisionado (DOT de comunidade)','Sem informação']]); ?>
        </div>
      </div>  
    </div> 
    
    <div class="box box-default color-palette-box">
      <div class="row">
        <div class="col-md-6">
          <?= $this->Form->input('apresentacao_paciente_unidade',['label'=>'Forma de apresentação do doente na estrutura de saúde','type'=>'radio','name'=>'apresentacao_paciente_unidade',
          'options'=>['Apresentação voluntária',
                      'Encaminhado pela comunidade (ASC/Ativista/Curandeiro)',
                      'Encaminhado pelo serviço de saúde',
                      'Encaminhado pelo serviço privado (clínica privada)']]); ?>
        </div>
      </div>
    </div> 
  </div>
</div>

<div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <b>Vicios associados</b> 
  </div>
  <div class="panel-body">
    <table class="table table-condensed table-striped">
      <tbody>
        <tr>
          <td><?= $this->Form->input('fuma_tabaco',['label'=>' Fuma tabaco','type'=>'checkbox']); ?></td> 
          <td><?= $this->Form->input('bebe_alcool',['label'=>' Bebe álcool','type'=>'checkbox']); ?></td> 
          <td><?= $this->Form->input('usa_drogas',['label'=>' Usa drogas','type'=>'checkbox']); ?></td> 
        </tr>
        <tr>
          <td><?= $this->Form->input('bebe_warga',['label'=>' Bebe warga','type'=>'checkbox']); ?></td> 
          <td><?= $this->Form->input('bebe_cafe_touba',['label'=>' Bebe café touba','type'=>'checkbox']); ?></td> 
          <td><?= $this->Form->input('bebe_cafe',['label'=>' Bebe café','type'=>'checkbox']); ?></td> 
        </tr>
      </tbody>
    </table>
  </div>
</div>

<br>
<div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <b>Contactos do Doente</b> 
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-12">
        <?= $this->Form->input('contato_tb_antes',['label'=>'Teve contacto com qualquer pessoa doente de TB antes de adoecer?','type'=>'radio','name'=>'contato_tb_antes','options'=>['sim','não']]); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <?= $this->Form->input('vive_mesma_moradia',['label'=>'Vive com quantas pessoas na MESMA MORADIA?','class'=>'input-sm quantidade-mask','id'=>'vive-mesma-moradia']); ?>
      </div>
      <div class="col-md-7" id="criancas-mesma-moradia-div">
        <?= $this->Form->input('criancas_mesma_moradia',['label'=>'Quantas crianças menores que 5 anos de idade vivem na MESMA MORADIA?','class'=>'input-sm quantidade-mask','id'=>'criancas-mesma-moradia']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <?= $this->Form->input('pessoas_mesma_casa',['label'=>'Vive com quantas pessoas na MESMA CASA?','class'=>'input-sm quantidade-mask','id'=>'pessoas-mesma-casa']); ?>
      </div>
      <div class="col-md-7" id="criancas-mesma-casa-div">
        <?= $this->Form->input('criancas_mesma_casa',['label'=>'Quantas crianças menores que 5 anos de idade vivem na MESMA CASA?','class'=>'input-sm quantidade-mask','id'=>'criancas-mesma-casa']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <?= $this->Form->input('pessoas_casa_vizinha',['label'=>'Vive com quantas pessoas nas CASAS VIZINHAS?','class'=>'input-sm quantidade-mask','id'=>'pessoas-casa-vizinha']); ?>
      </div>
      <div class="col-md-7" id="criancas-casa-vizinha-div">
        <?= $this->Form->input('criancas_casa_vizinha',['label'=>'Quantas crianças menores que 5 anos de idade vivem nas CASAS VIZINHAS?','class'=>'input-sm quantidade-mask','id'=>'criancas-casa-vizinha']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <?= $this->Form->input('pessoas_mesmo_quarto',['label'=>'Com quantas pessoas dorme no MESMO QUARTO?','class'=>'input-sm quantidade-mask','id'=>'pessoas-mesmo-quarto']); ?>
      </div>
      <div class="col-md-7">
        <?= $this->Form->input('pessoas_mesma_cama',['label'=>'Com quantas pessoas dorme na MESMA CAMA?','class'=>'input-sm quantidade-mask','id'=>'pessoas-mesma-cama']); ?>
      </div>
    </div>
  </div>
</div>



<?= $this->Form->end(); ?>












<div class="modal fade" tabindex="-1" role="dialog" id="modalBuscarPaciente">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Buscar Paciente</h4>
            </div>
            <div class="modal-body">
                <?= $this->Form->create('buscar'); ?>
                <div class="row">
                    <div class="col-md-7">
                        <?= $this->Form->input('nome_paciente',['label'=>'Nome do Paciente','id'=>'nome-profissional-cadastro']); ?>
                    </div>
                    <div class="col-md-5">
                        <?= $this->Form->input('Unidade de Registro'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <?= $this->Form->input('data_registro',['label'=>'Data de Registro','class'=>'input-sm datemask']); ?>
                    </div>
                    
                    <div class="col-md-3">
                        <?= $this->Form->input('n_paciente',['label'=>'Nº do Paciente','class'=>'input-sm numero-paciente-mask']); ?>
                    </div>
                    <div class="col-md-4">
                        <?= $this->Form->input('identificacao',['label'=>'Identificação','class'=>'input-sm identificacao']); ?>
                    </div>
                    <div class="col-md-2">
                        <br>
                         <button type="button" class="btn btn-default" data-dismiss="modal">Buscar</button>
                    </div>
                </div>
                <?= $this->Form->end(); ?>
                <br>
                <table class="table table-condensed table-striped">
                    <thead>
                    <tr>
                        <th>Ação</th>
                        <th>Nome</th>
                        <th>Identificação</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="" class="btn btn-default btn-xs">Escolher</a></td>
                        <td>Paciente 1</td>
                        <td>201901001000001</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cadastrar Paciente</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
