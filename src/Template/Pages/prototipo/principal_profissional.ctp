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

  

<?php $this->end(); ?>   

<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Unidade 1') ?>


<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <!-- <span class="info-box-icon bg-aqua"><i class="fa fa-medkit"></i></span> -->
      <span class="info-box-icon bg-aqua"><i class="fas fa-laptop-medical" aria-hidden="true"></i></span>  
      <div class="info-box-content">
        <span class="info-box-text">Tratamentos <br>Cadastrados</span>
        <span class="info-box-number">30</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <!-- <span class="info-box-icon bg-red"><i class="fa fa-hospital-o"></i></span> -->
      <span class="info-box-icon bg-red"><i class="fas fa-user-md" aria-hidden="true"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Pacientes <br>Tratados Hoje</span>
        <span class="info-box-number">20</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix visible-sm-block"></div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="info-box">
      <!-- <span class="info-box-icon bg-green"><i class="fa fa-balance-scale"></i></span> -->
      <span class="info-box-icon bg-green"><i class="fas fa-ambulance" aria-hidden="true"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Supervisionados <br> Centro</span>
        <span class="info-box-number">7</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Avisos e Notícias</h3>
      </div>
      <div class="box-body" style="">
				<div class="panel">
				  <div class="panel-heading"><b>01/03/2016 - Reunião Camara Técnica</b></div>
				  <div class="panel-body">
				      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
				  </div>
				</div>
				<div class="panel">
				  <div class="panel-heading"><b>01/02/2016 - Reunião Camara Técnica</b></div>
				  <div class="panel-body">
				      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
				  </div>
				</div>
      </div>
      <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase">Ver todas as notícias</a>
      </div>
    </div>	
	</div>
</div>


		

