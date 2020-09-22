<?php $this->start('scriptLib'); ?>
  <?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
  <?= $this->Html->script('/bower_components/iCheck/icheck.js') ?>
  <?= $this->Html->script('/vendor/almasaeed2010/adminlte/bower_components/inputmask/dist/inputmask/inputmask.js') ?>
  <?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
  <?= $this->Html->script('/bower_components/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>
  <?= $this->Html->script('/node_modules/fullcalendar/core/main.js') ?>
  <?= $this->Html->script('/node_modules/fullcalendar/packages/daygrid/main.js') ?>
  <?= $this->Html->script('/node_modules/fullcalendar/packages/interaction/main.js') ?>
  <?= $this->Html->script('/node_modules/fullcalendar/packages/timegrid/main.js') ?>
  <?= $this->Html->script('/node_modules/fullcalendar/core/locales/pt-br.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
  <?= $this->Html->css('/bower_components/iCheck/skins/flat/blue.css') ?>
  <?= $this->Html->css('/bower_components/jquery-ui-1.12.1.custom/jquery-ui.min.css') ?>
  <?= $this->Html->css('/node_modules/fullcalendar/core/main.min.css') ?>
  <?= $this->Html->css('/node_modules/fullcalendar/packages/daygrid/main.css') ?>

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



  
  var calendarEl = document.getElementById('calendar');
  var Draggable = FullCalendarInteraction.Draggable;

  var containerEl = document.getElementById('external-events');
  new Draggable(containerEl, {
    itemSelector: '.fc-event',
    eventData: function(eventEl) {
      return {
        title: eventEl.innerText
      };
    }
  });
  var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid' ],
          editable: true,
          droppable: true,
          locale: 'pt-br'
        }); 

  
  calendar.render();
  

  
<?php $this->end(); ?> 

<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Cadastro de DOT') ?>

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
                <b>Cadastro de DOT</b> 
              </div>
              <div class="panel-body">
                <div class="row">

                  <div class="col-md-3">
                    <dl class="dl-horizontal">
                      <div id='external-events'>
                        <p>
                          <strong>Tipo de supervisão</strong>
                        </p>
                        <div class='fc-event'>Autoadministrado</div>
                        <div class='fc-event bg-red'>Não tomou</div>
                        <div class='fc-event bg-green'>Supervisionado (DOT de centro)</div>
                        <div class='fc-event bg-green'>Supervisionado (DOT de comunidade)</div>
                        <div class='fc-event bg-orange'>Sem informação</div>
                        <p>Clique e arraste o tipo de supervisão até a data correspondente no calendário</p>
                      </div>

                    </dl>
                  </div>
                  
                  <div class="col-md-9">
                    <div class="box box-primary">
                      <div class="box-body no-padding">
                        <!-- THE CALENDAR -->
                        <div id='calendar'></div> 
                      </div>
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



