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

<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Visualizar DOT') ?>

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
                <b>Ficha de Tratamento</b> 
              </div>
              <div class="panel-body">
                
                <p align="center"> Março - Total: <b><font color="#32CD32">(SCe):</font></b> 2 / <b><font color="green">(SCo):</font></b> 15 / <b><font color="#3299CC">(AA):</font></b> 12 / <b><font color="red">(N):</font></b> 0 / <b><font color="orange">(SI):</font></b> 2 </p>
              	<table align="center" border="">
                          <tbody><tr><td></td>
                          <td bgcolor="green"><b> <font size="2"> 01 (SCo)</font> </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  02 (AA)</font> </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  03 (AA)</font> </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  04 (AA)</font> </b></td>
                          <td bgcolor="#32CD32"><b><font size="2"> 05 (SCe)</font> </b></td>
                          <td bgcolor="#32CD32"><b><font size="2"> 06 (SCe)</font> </b></td>
                          <td bgcolor="green"><b><font size="2">  07 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  08 (SCo)</font>  </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  09 (AA)</font> </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  10 (AA)</font> </b></td>
                          <td bgcolor="green"><b><font size="2">  11 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  12 (SCo)</font>  </b></td>
                          <td bgcolor="orange"><b><font size="2">  13 (SI)</font>  </b></td>
                          <td bgcolor="orange"><b><font size="2">  14 (SI)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  15 (SCo)</font>  </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  16 (AA)</font> </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  17 (AA)</font> </b></td>
                          <td bgcolor="green"><b><font size="2">  18 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  19 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  20 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  21 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  22 (SCo)</font>  </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  23 (AA)</font> </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  24 (AA)</font> </b></td>
                          <td bgcolor="green"><b><font size="2">  25 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  26 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  27 (SCo)</font>  </b></td>
                          <td bgcolor="green"><b><font size="2">  28 (SCo)</font>  </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  29 (AA)</font> </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  30 (AA)</font> </b></td>
                          <td bgcolor="#3299CC"><b><font size="2">  31 (AA)</font> </b></td>
                </tr></tbody></table>

                <br>

                <p align="center"> Abril - Total: <b><font color="#32CD32">(SCe):</font></b> 0 / <b><font color="green">(SCo):</font></b> 17 / <b><font color="#3299CC">(AA):</font></b> 13 / <b><font color="red">(N):</font></b> 0 / <b><font color="orange">(SI):</font></b> 0  </p>
                <table align="center" border="">
                <tbody><tr><td></td>
                          <td bgcolor="#3299CC"><b><font size="2">  01 (AA)</font></b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  02 (AA)</font> </b></td>
                                                <td bgcolor="green"><b><font size="2">  03 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  04 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  05 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  06 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  07 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  08 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  09 (AA)</font> </b></td>
                                                <td bgcolor="green"><b><font size="2">  10 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  11 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  12 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  13 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  14 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  15 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  16 (AA)</font> </b></td>
                                                <td bgcolor="green"><b><font size="2">  17 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  18 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  19 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  20 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  21 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  22 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  23 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  24 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  25 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  26 (AA)</font> </b></td>
                                                <td bgcolor="green"><b><font size="2">  27 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  28 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  29 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  30 (AA)</font> </b></td>
                  </tr></tbody></table>

                   <br>
                  <p align="center"> Maio - Total: <b><font color="#32CD32">(SCe):</font></b> 1 / <b><font color="green">(SCo):</font></b> 10 / <b><font color="#3299CC">(AA):</font></b> 10 / <b><font color="red">(N):</font></b> 9 / <b><font color="orange">(SI):</font></b> 0</p>
                  <table align="center" border="">
                  <tbody><tr>
                    <td bgcolor="#32CD32"><b><font size="2"> 01 (SCe)</font> </b></td>
                    <td bgcolor="green"><b><font size="2">  02 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  03 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  04 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  05 (AA)</font> </b></td>
                                                <td bgcolor="red"><b> <font size="2">06 (N)</font> </b> </td>
                                                <td bgcolor="red"><b> <font size="2">07 (N)</font> </b> </td>
                                                <td bgcolor="red"><b> <font size="2">08 (N)</font> </b> </td>
                                                <td bgcolor="green"><b><font size="2">  09 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  10 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  11 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  12 (AA)</font> </b></td>
                                                <td bgcolor="green"><b><font size="2">  13 (SCo)</font>  </b></td>
                                                <td bgcolor="red"><b> <font size="2">14 (N)</font> </b> </td>
                                                <td bgcolor="red"><b> <font size="2">15 (N)</font> </b> </td>
                                                <td bgcolor="red"><b> <font size="2">16 (N)</font> </b> </td>
                                                <td bgcolor="red"><b> <font size="2">17 (N)</font> </b> </td>
                                                <td bgcolor="red"><b> <font size="2">18 (N)</font> </b> </td>
                                                <td bgcolor="red"><b> <font size="2">19 (N)</font> </b> </td>
                                                <td bgcolor="green"><b><font size="2">  20 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  21 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  22 (AA)</font> </b></td>
                                                <td bgcolor="green"><b><font size="2">  23 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  24 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  25 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  26 (AA)</font> </b></td>
                                                <td bgcolor="green"><b><font size="2">  27 (SCo)</font>  </b></td>
                                                <td bgcolor="green"><b><font size="2">  28 (SCo)</font>  </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  29 (AA)</font> </b></td>
                                                <td bgcolor="#3299CC"><b><font size="2">  30 (AA)</font> </b></td>
                                    </tr></tbody></table>


              </div>
            </div>
          <?= $this->Form->end(); ?>
        </div>
      </div>
    </div>
  </div>
</div>    
