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
    placeholder: "Seleciona o sexo",
  });

  $('#etnia').select2({
    theme:'bootstrap',
    placeholder: "Seleciona a etnia",
  });
  $('#religiao').select2({
    theme:'bootstrap',
    placeholder: "Seleciona a religião",
  });
  $('#referencia').select2({
    theme:'bootstrap',
    placeholder: "Seleciona uma referência",
  });
  $('#tecnico_saude').select2({
    theme:'bootstrap'
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
    console.log("Teste");
    if($("#referencia").val() == 10 || $("#referencia").val() == 7){
      $('#referencia-outra-text').show();
    } else {
      $('#referencia-outra-text').hide();
    }
  });

<?php $this->end(); ?>
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
        <?= $this->Form->input('n_doente',['label'=>'Nº paciente','class'=>'input-sm']); ?>
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
      <div class="col-md-4">
        <?= $this->Form->input('sexo',['label'=>'Sexo','class'=>'input-sm','options'=>['Masculino','Feminino'],'empty'=>'-','id'=>'sexo']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <?= $this->Form->input('Naturalidade',['label'=>'Naturalidade','class'=>'input-sm']); ?>
      </div>
      <div class="col-md-4">
        <?= $this->Form->input('Religião',['label'=>'Religião','class'=>'input-sm','options'=>['Católico','Protestante'],'empty'=>'-','id'=>'religiao']); ?>
      </div>
      
      <div class="col-md-4">
        <?= $this->Form->input('Etnia',['label'=>'Etnia','class'=>'input-sm','options'=>['Branca','Preta','Amarela','Parda','Indigena'],'empty'=>'-','id'=>'etnia']); ?>
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
        <?= $this->Form->input('tecnico_saude',['label'=>'Técnico de saúde?','type'=>'radio','name'=>'iCheck','options'=>['não','sim']]); ?>
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
        <?= $this->Form->input('referencia',['label'=>'Referência','class'=>'input-sm','options'=>['Cônjuge','Filho','Enteado','Neto/Bisneto','Pai/Mãe','Irmão/Irmã','Genro/Nora','Outro Parente', 'Vizinho', 'Curandeiro', 'Outro'],'empty'=>'-','id'=>'referencia']); ?>
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






<div class="modal" tabindex="-1" role="dialog" id="modalBuscaCadsus">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Buscar Paciente no CADSUS</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
            <?= $this->Form->input('',['label'=>'Nome completo do paciente']); ?>
          </div>
          <div class="col-md-3">
            <?= $this->Form->input('',['label'=>'Nome completo da mãe']); ?>
          </div>
          <div class="col-md-3">
            <?= $this->Form->input('',['label'=>'Data de nascimento']); ?>
          </div>
          <div class="col-md-2">
            <?= $this->Form->input('',['label'=>'CNS']); ?>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <label for=""></label>
              <button type="button" class="btn btn-primary form-control"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
        <table class="table table-condensed">
          <thead>
          <tr>
            <th>Ação</th>
            <th>Nome</th>
            <th>Mae</th>
            <th>Data Nascimento</th>
            <th>CNS</th>
            <th>Cidade</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td><a href="" class="span btn btn-default btn-xs">escolher</a></td>
            <td>Paciente 001</td>
            <td>Mãe Paciente 001</td>
            <td>01/01/1980</td>
            <td>123456789012345</td>
            <td>Brasília / DF</td>
          </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="close">Fechar</button>
      </div>
    </div>
  </div>
</div>


<?= $this->Form->end(); ?>

