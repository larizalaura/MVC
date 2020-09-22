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

  Inputmask("999").mask($('.peso-mask'));

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

  $('#fase-exame').select2({
    theme:'bootstrap'
  });

  $('#nome-exame').select2({
    theme:'bootstrap'
  });

  $('#resultado-exame').select2({
    theme:'bootstrap'
  });

  $('#adicionar-exame').on('shown.bs.modal', function () {
    $('#modalAdicionarExame').focus()
  });

  $("#fase-exame option[value=" + selectedVal+"]").attr("selected","selected") ;


  
<?php $this->end(); ?>   

<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Cadastro de Exames') ?>


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
                <b>Cadastrar novo exame</b> 
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-2">
                    <?= $this->Form->input('fase_exame',['label'=>'Fase do exame','id'=>'fase-exame','options'=>['Intensiva','Manutenção']]); ?>
                  </div>
                  <div class="col-md-3">
                    <?= $this->Form->input('nome_exame',['label'=>'Nome do exame','id'=>'nome-exame','options'=>['BK 0 mês','RX 0 mês','GeneXpert','Cultura 0 mês','Cultura 2º mês','GeneXpert de controle','BK 3º mês','Cultura 3º mês','BK 5º mês','Cultura 5º mês','BK fim de tratamento','Cultura fim de tratamento']]); ?>
                  </div>
                  <div class="col-md-2">
                    <?= $this->Form->input('data_exame',['label'=>'Data do exame','class'=>'input-sm datemask datepicker','value'=>'01/08/2019','prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
                  </div>
                  <div class="col-md-2">
                    <?= $this->Form->input('resultado_exame',['label'=>'Resultado','id'=>'resultado-exame','options'=>['Positivo','Negativo']]); ?>
                  </div>
                  <div class="col-md-2">
                    <?= $this->Form->input('peso_paciente',['label'=>'Peso do paciente','id'=>'peso-paciente','append'=>'Kg', 'class'=>'peso-mask','value'=>'075']); ?>
                  </div>
                  <div class="col-md-1">
                  <br>
                    <button type="button" data-toggle="modal" data-target="#modalAdicionarExame" class="btn btn-primary " title="Adicionar exame" id="adicionar-exame"><i class="fas fa-plus fa-lg"></i></button>
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
  <div class="col-md-2">
    <?= $this->Html->link('<button type="button" ><b>Voltar</b></button>',['controller'=>'pages','action'=>'prototipo/exames/cadastrar_exame_tb'],['escape'=>false,'class'=>'btn btn-block btn-lg btn-default','title'=>'Voltar para a lista de tratamentos']) ?>
  </div>
</div>



<div class="modal modal-success fade" tabindex="-1" role="dialog" id="modalAdicionarExame">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Confirmação das informações do exame</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <dl class="dl-horizontal">
              <dt>Fase</dt>
                <dd>Intensiva</dd>
              <dt>Exame</dt>
                <dd>BK fim de tratamento</dd>
              <dt>Data</dt>
                <dd>10/07/2019</dd>
              <dt>Resultado</dt>
                <dd>Negativo</dd>
              <dt>Peso</dt>
                <dd>70 kg</dd>
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

<div class="modal modal-success fade" tabindex="-1" role="dialog" id="modalRemoverExame">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Confirmação das remoção do exame</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <h3>Remover o exame abaixo?</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <dl class="dl-horizontal">
              <dt>Fase</dt>
                <dd>Intensiva</dd>
              <dt>Exame</dt>
                <dd>BK fim de tratamento</dd>
              <dt>Data</dt>
                <dd>10/07/2019</dd>
              <dt>Resultado</dt>
                <dd>Negativo</dd>
              <dt>Peso</dt>
                <dd>70 kg</dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-outline" data-dismiss="modal">Remover</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div><!-- /.modal -->
