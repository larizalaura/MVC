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

  $('#resultado').select2({
    theme:'bootstrap',
    placeholder: "Seleciona o resultado"
  });

  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-blue',
    radioClass: 'iradio_flat-blue'
  });
  
  $('#outro-motivo-div').hide();
  $("#outro-motivo").on('ifChecked',function(event){
    console.log("Passou");
    $('#outro-motivo-div').show();
  });
  $("#outro-motivo").on('ifUnchecked',function(event){
    $('#outro-motivo-div').hide();
  });

<?php $this->end(); ?>   

<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Cadastro do Resultado do Tratamento') ?>

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
                <b>Informações do Tratamento</b> 
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('data_registro_resultado',['label'=>'Data do registro do resultado','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>','disabled'=>true]); ?>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <?= $this->Form->input('data_resultado',['label'=>'Data do resultado','class'=>'input-sm datemask datepicker','value'=>date('d/m/Y'),'prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
                  </div>
                  <div class="col-md-8">
                    <?= $this->Form->input('resultado',['label'=>'Resultado','type'=>'select',
                    'options'=>['Curado',
                                'Tratamento completo',
                                'Fracasso terapêutico',
                                'Perdido de vista',
                                'Óbito',
                                'Não avaliado',
                                'TB-MDR (CAT.IV)'],'empty'=>'-','id'=>'resultado']); ?>
                  </div>
                </div>
                
                <div class="box box-default color-palette-box">
                  <h5><b>Fatores associados ao abandono de tratamento</b></h5>
                  <table class="table table-condensed table-striped">
                    <tbody>
                      <tr>
                        <td><?= $this->Form->input('socio_demografico',['label'=>' Socio demográfico','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('doenca_associada',['label'=>' Doenças associadas','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('assistencia_saude',['label'=>' Assistência à saúde','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('uso_drogas',['label'=>' Uso de drogas','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('alcool',['label'=>' Álcool','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('reacao_adversa',['label'=>' Reações adversas','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('problema_socioeconomico',['label'=>' Problemas socioeconómicos','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('motivo_religioso',['label'=>' Motivos religiosos','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('acesso_tratamento',['label'=>' Dificuldades de acesso ao tratamento','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('sensacao_cura',['label'=>' Sensação de cura antes de fim do tratamento','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('longa_duracao',['label'=>' Longa duranção do tratamento','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('estigmatizacao',['label'=>' Estigmatização','type'=>'checkbox']); ?></td> 
                      </tr>
                      <tr>
                        <td><?= $this->Form->input('quantidade_comprimidos',['label'=>' Quantidade de comprimidos a administrar','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('influencia_familiar',['label'=>' Influência e tratamento familiar','type'=>'checkbox']); ?></td> 
                        <td><?= $this->Form->input('outro_motivo',['label'=>' Outros motivos (Especificar)','type'=>'checkbox','id'=>'outro-motivo']); ?></td> 
                      </tr>
                    </tbody>
                  </table>
                  <div class="row" id="outro-motivo-div">
                    <div class="col-md-12">
                      <?= $this->Form->input('outro_motivo',['label'=>'Outro motivo','id'=>'outro-motivo']); ?>
                    </div>
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
