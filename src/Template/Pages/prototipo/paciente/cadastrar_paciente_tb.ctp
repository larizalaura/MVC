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

  Inputmask("(999) 9999-9999").mask($('.telefone'));

  Inputmask("999999").mask($('#n-doente'));

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

  $('#sexo').select2({
    theme:'bootstrap',
    placeholder: "Selecione o sexo",
  });

  $('#etnia').select2({
    theme:'bootstrap',
    placeholder: "Selecione a etnia",
  });
  $('#religiao').select2({
    theme:'bootstrap',
    placeholder: "Selecione a religião",
  });
  $('#referencia').select2({
    theme:'bootstrap',
    placeholder: "Selecione uma referência",
  });
  $('#tecnico_saude').select2({
    theme:'bootstrap'
  });
  $('#escolaridade').select2({
    theme:'bootstrap',
    placeholder: "Selecione o nível de escolaridade",
  });
  $('#estado_civil').select2({
    theme:'bootstrap',
    placeholder: "Selecione o estado civil",
  });

  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });
  
  $('input:radio[name="iCheck"]').filter('[id="icheck-0"]').iCheck('check');


  $('#outra-profissao-text').hide();
    
  $("#outra-profissao").on('ifChanged',function(event){
    if(event.target.checked){
      $('#outra-profissao-text').show();
    } else {
      $('#outra-profissao-text').hide();
    }
  });

  $('#referencia-outra-text').hide();

  $("#referencia").change(function(){
    if($("#referencia").val() == 10 || $("#referencia").val() == 7){
      $('#referencia-outra-text').show();
    } else {
      $('#referencia-outra-text').hide();
    }
  });

  $("#n-doente").val("000001");
  setCodigoIdentificacao();

  $("#n-doente").keyup(function(){
    setCodigoIdentificacao();
  });

  function setCodigoIdentificacao(){
    var n_doente = $("#n-doente").val();
    //quantos numeros preenchidos
    var n0 =$('#n-doente').val().match(new RegExp("_","g"));
    n0 = n0 ? n0.length : 0;
    n_doente = $('#n-doente').val().replace(/_/g," ");
    for(i=1;i<=n0;i++){
      n_doente = "0"+n_doente;
    }
    var id = $.datepicker.formatDate('yymm', new Date())+"001"+n_doente;
    //console.log(id);
    $("#identificacao").val(id);
  }

  

<?php $this->end(); ?>




<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Cadastro de Paciente') ?>

<div class="nav-tabs-custom">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="socio_demograficas">
          <?= $this->Form->create('paciente'); ?>
            <div class="panel panel-default panel-primary">
              <div class="panel-heading">
                <b>Identificação do Paciente </b> 
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('data_registro',['label'=>'Data de registro','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('n_doente',['label'=>'Nº paciente','class'=>'input-sm','id'=>'n-doente']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('identificacao',['label'=>'Código de identificação','class'=>'input-sm','readonly'=>true,'id'=>'identificacao']); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default panel-primary">
              <div class="panel-heading">
                <b>Informações Sócio Demográficas</b> 
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('nome_doente',['label'=>'Nome do paciente']); ?>
                  </div>
                  <div class="col-md-2">
                    <?= $this->Form->input('idade_anos',['label'=>'Idade(anos)','class'=>'input-sm']); ?>
                  </div>
                  <div class="col-md-2">
                    <?= $this->Form->input('idade_meses',['label'=>'Idade(meses)','class'=>'input-sm']); ?>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('sexo',['label'=>'Sexo','class'=>'input-sm','options'=>['Masculino','Feminino'],'empty'=>'-','id'=>'sexo']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('Estado civil',['label'=>'Estado civil','class'=>'input-sm','options'=>['Casado', 'Solteiro'],'empty'=>'-','id'=>'estado_civil']); ?>
                  </div>
                 
                  <div class="col-md-4">
                    <?= $this->Form->input('Nível de escolaridade',['label'=>'Nível de escolaridade','class'=>'input-sm','options'=>['Primária', 'Secundário (siclo)', 'Geral (liceu)', 'Médio', 'Licenciado', 'Mestrado', 'Doutorado', 'Pós-doutorado'],'empty'=>'-','id'=>'escolaridade']); ?>
                  </div>    
                </div>

                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('Naturalidade',['label'=>'Naturalidade','class'=>'input-sm']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('Etnia',['label'=>'Etnia','class'=>'input-sm','options'=>['Balanta Mane', 'Balanta', 'Beafada', 'Bijagó', 'Caboverdiano', 'Cassanga', 'Felupe', 'Fula', 'Geba', 'Mancanha', 'Mandinga', 'Manjaco', 'Mansonca', 'Mista', 'Nhominca', 'Oinca', 'Papel', 'Sousso'],'empty'=>'-','id'=>'etnia']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('Religião',['label'=>'Religião','class'=>'input-sm','options'=>['Católica', 'Animista', 'Evangélica', 'Muçulmana'],'empty'=>'-','id'=>'religiao']); ?>
                  </div>    
                </div>

                <div class="row">            
                  <div class="col-md-12">
                    <?= $this->Form->input('Tabanca/bairro',['label'=>'Tabanca/bairro','class'=>'input-sm']); ?>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="panel panel-default panel-primary">
              <div class="panel-heading">
                <b>Ocupação</b> 
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                    <p></p>
                    <?= $this->Form->input('tecnico_saude',['label'=>'Técnico de saúde?','type'=>'radio','name'=>'iCheck','options'=>['Não','Sim']]); ?>
                  </div>
                </div>
                <br>
                <div class="box box-default color-palette-box">
                  <table class="table table-condensed table-striped">
                    <thead>
                      <tr>
                        <th>Actividades profissionais</th><th></th>
                        <th></th><th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?= $this->Form->input('mecanico',['label'=>' Mecânico','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('agricultor',['label'=>' Agricultor','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('horticultor',['label'=>' Horticultor','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('comerciante',['label'=>' Comerciante','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('vendedor',['label'=>' Vendedeira ou vendedor','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('horticultor',['label'=>' Pescador','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('carpinteiro',['label'=>' Carpinteiro','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('pedreiro',['label'=>' Pedreiro','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('transportador',['label'=>' Transportador(comiões de longo curso)','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('motorista',['label'=>' Motorista','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('medico',['label'=>' Médico','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('enfermeiro',['label'=>' Enfermeiro','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('laboratorista',['label'=>' Laboratorista (técnico de laboratorio)','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('assistente',['label'=>' Assistente social no hospital','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('ferreiro',['label'=>' Ferreiro','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('mineiro',['label'=>' Mineiro(garimpeiro)','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('outra_profissao',['label'=>' Outro','type'=>'checkbox','id'=>'outra-profissao']); ?></td>
                        <td><?= $this->Form->input('outra_profissao_text',['label'=>'','type'=>'text','id'=>'outra-profissao-text','placeholder'=>'Qual Atividade?']); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>  
              </div>
            </div>
            <div class="panel panel-default panel-primary">
              <div class="panel-heading">
                <b>Contato do paciente ou da pessoa mais próxima</b>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('telefone1',['label'=>'Nº do Telemóvel 1','class'=>'input-sm telefone','prepend'=>'<i class="fas fa-phone-alt"></i>']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('telefone2',['label'=>'Nº do Telemóvel 2','class'=>'input-sm telefone','prepend'=>'<i class="fas fa-phone-alt"></i>']); ?>
                  </div>
                  <div class="col-md-4">
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default panel-primary ">
              <div class="panel-heading">
                  <b>Pessoa de Referência para o DOT</b>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('nome_pessoa_referencia',['label'=>'Nome da Pessoa de Referência','class'=>'input-sm']); ?>
                  </div>
                  <div class="col-md-2">
                    <?= $this->Form->input('idade_pessoa_referencia',['label'=>'Idade (em anos)','class'=>'input-sm']); ?>
                  </div>
                  <div class="col-md-3">
                    <?= $this->Form->input('referencia',['label'=>'Referência','class'=>'input-sm','options'=>['Familiar', 'Vizinho', 'Curandeiro', 'Agente de saúde comunitário', 'Ativista', 'Outro'],'empty'=>'-','id'=>'referencia']); ?>
                  </div>
                   <div class="col-md-3">
                    <?= $this->Form->input('referencia_outra',['label'=>'','id'=>'referencia-outra-text','placeholder'=>'Qual outro?']); ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('telefone1',['label'=>'Nº do Telemóvel da Pessoa de Referência 1','class'=>'input-sm telefone','prepend'=>'<i class="fas fa-phone-alt"></i>']); ?>
                  </div>
                  <div class="col-md-4">
                    <?= $this->Form->input('telefone2',['label'=>'Nº do Telemóvel da Pessoa de Referência 2','class'=>'input-sm telefone','prepend'=>'<i class="fas fa-phone-alt"></i>']); ?>
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