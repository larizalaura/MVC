<?php $this->start('scriptLib'); ?>
  <?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
  <?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
<?php $this->end(); ?>
<?php $this->start('script'); ?>

  $('#nome-paciente').select2({
    theme:'bootstrap',
    minimumInputLength: 1
  });

  $('#n-paciente').select2({
    theme:'bootstrap',
    minimumInputLength: 1
  });

  $('#identificacao').select2({
    theme:'bootstrap',
    minimumInputLength: 1
  });

  $(".datemask").inputmask({
    alias: "datetime",
    inputFormat: "dd/mm/yyyy"
  });


<?php $this->end(); ?>

<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Buscar Tratamento para Cadastrar Internação') ?>

<div class="row">

    <div class="col-sm-offset-0 col-md-12">

        <div class="panel panel-primary">

            <div class="panel-heading"><b>Busca do Tratamento</b></div>
            <div class="panel-body">
                <form class="form row">
                    <?= $this->Form->create('busca',['align' => 'inline','type'=>'get']);  ?>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Nome do Paciente</label>
                            <?= $this->Form->input ('nome_paciente',['type'=>'select','id'=>'nome-paciente','options'=>['Paciente 1','Paciente 2', 'Paciente 3', 'Paciente 4', 'Paciente 5', 'Paciente 6', 'Paciente 7', 'Paciente 8', 'Paciente 9', 'Paciente 10', 'Paciente 11', 'Paciente 12'],'empty'=>'-']); ?>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Nº Paciente</label>
                            <?= $this->Form->input ('n_paciente',['type'=>'select','id'=>'n-paciente','options'=>['000001','000002', '000003', '000004', '000005', '000006', '000007', '000008', '000009', '000010', '000011', '000012'],'empty'=>'-']); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Identificação</label>
                            <?= $this->Form->input ('identificacao',['type'=>'select','id'=>'identificacao','options'=>['20190101000001','20190101000002', '20190101000003', '20190101000004', '20190101000005', '20190101000006', '20190101000007', '20190101000008', '20190101000009', '20190101000010', '20190101000011', '20190101000012'],'empty'=>'-']); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Data Registro Tratamento</label>
                            <?= $this->Form->input('data_registro',['class'=>'input-sm datemask','prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <br>
                        <?= $this->Form->button('<i class="fa fa-search"></i>', ['class'=>"btn btn-primary",'escape' => false]); ?>      
                    </div>
                    <?= $this->Form->end(); ?>
                 </form>                               
            </div>
        </div>    
    </div>            
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <b>Resultados</b>
  </div>
  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th>Ações</th>
          <th>Nome Paciente</th>
          <th>Registro Tratamento</th>
          <th>Unidade</th>
          <th>Nº Paciente</th>
          <th>Identificação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $this->Html->link('<i class="fas fa-procedures" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/cadastrar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Escolher Paciente para Cadastrar Internação']) ?></td>
          <td>Paciente 1</td>
          <td>01/01/2019</td>
          <td>Unidade 1</td>
          <td>000001</td>
          <td>20190101000001</td>
        </tr>
        <tr>
          <td><?= $this->Html->link('<i class="fas fa-procedures" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/cadastrar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Escolher Paciente para Cadastrar Internação']) ?></td>
          <td>Paciente 2</td>
          <td>01/01/2019</td>
          <td>Unidade 1</td>
          <td>000002</td>
          <td>20190101000002</td>
        </tr>
        <tr>
          <td><?= $this->Html->link('<i class="fas fa-procedures" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/cadastrar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Escolher Paciente para Cadastrar Internação']) ?></td>
          <td>Paciente 3</td>
          <td>01/01/2019</td>
          <td>Unidade 1</td>
          <td>000003</td>
          <td>20190101000003</td>
        </tr>
        <tr>
          <td><?= $this->Html->link('<i class="fas fa-procedures" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/cadastrar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Escolher Paciente para Cadastrar Internação']) ?></td>
          <td>Paciente 4</td>
          <td>01/01/2019</td>
          <td>Unidade 1</td>
          <td>000004</td>
          <td>20190101000004</td>
        </tr>
        <tr>
          <td><?= $this->Html->link('<i class="fas fa-procedures" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/cadastrar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Escolher Paciente para Cadastrar Internação']) ?></td>
          <td>Paciente 5</td>
          <td>01/01/2019</td>
          <td>Unidade 1</td>
          <td>000005</td>
          <td>20190101000005</td>
        </tr>
        <tr>
          <td><?= $this->Html->link('<i class="fas fa-procedures" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/cadastrar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Escolher Paciente para Cadastrar Internação']) ?></td>
          <td>Paciente 6</td>
          <td>01/01/2019</td>
          <td>Unidade 1</td>
          <td>000006</td>
          <td>20190101000006</td>
        </tr>
        <tr>
          <td><?= $this->Html->link('<i class="fas fa-procedures" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/cadastrar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Escolher Paciente para Cadastrar Internação']) ?></td>
          <td>Paciente 7</td>
          <td>01/01/2019</td>
          <td>Unidade 1</td>
          <td>000007</td>
          <td>20190101000007</td>
        </tr>
        <tr>
          <td><?= $this->Html->link('<i class="fas fa-procedures" style="font-size:13px;color:#216376"></i>',['controller'=>'pages','action'=>'prototipo/mudanca/cadastrar_internacao_tb'],['escape'=>false,'class'=>'btn btn-xs btn-default','title'=>'Escolher Paciente para Cadastrar Internação']) ?></td>
          <td>Paciente 8</td>
          <td>01/01/2019</td>
          <td>Unidade 1</td>
          <td>000008</td>
          <td>20190101000008</td>
        </tr>
      </tbody>
    </table>
    <!--?= $this->element('Paginacao/paginacao') ?-->
  </div>
</div>
