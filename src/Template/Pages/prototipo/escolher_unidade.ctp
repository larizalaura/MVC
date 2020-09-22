<?php $this->layout = 'prototipo/public' ?>

<h2 class="text-center">SISTB - Sistema de Gerenciamento de Pacientes com Tuberculose</h2> 
<h3 class="text-center"><b>Guiné-Bissau</b></h3>

<?php $this->start('script'); ?>

  $('#select-unidade').select2();

<?php $this->end(); ?>


<div class="row">
  <div class="col-sm-offset-2 col-md-8">
    <!-- ?= $this->Form->create() ? -->
    <div class="panel panel-primary">
      <div class="panel-heading">Escolha a unidade em que se encontra</div>
      <div class="panel-body">
        <select name="unidade_id" class="form-control" id="selecionar-unidade">
          <option value="1">Unidade 1</option>
          <option value="2">Unidade 2</option>
        </select>
      </div>
      <div class="panel-footer">
        <?= $this->Html->link('Escolher',['controller'=>'pages','action'=>'prototipo/principal_profissional'],['class'=>'btn btn-default'])?>
      </div>
    </div>
    <!--?= $this->Form->end() ?-->
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Permissões ativas do usuário</div>
      <div class="panel-body">
        <div class="box">
          <div class="box-body no-padding">
            <table class="table table-condensed">
              <tbody>
                <tr>
                  <th>Unidade</th>
                  <th>Início da permissão</th>
                  <th>Data de expiração</th>
                  <th>Tempo restante</th>
                </tr>
                
                <tr>
                  <td>Unidade 1</td>
                  <td>01/01/2019</td>
                  <td>01/01/2020</td>
                  <td>
                    <span class="label label-danger"> 30 dias</span>
                    <span class="label label-primary" title="Entre em contato com o administrador do sistema para renovar sua permissão antes que expire"> ? </span>
                  </td>
                </tr>
                <tr>
                  <td>Unidade 2</td>
                  <td>01/01/2019</td>
                  <td>01/01/2020</td>
                  <td>
                    <span class="label label-success"> 259 dias</span>
                  </td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
<br>
<br>

<div class="row">
  <div class="col-md-5">
      <?= $this->Html->image("public/brasil_guine-bissau.png", ['url' => '', 'height'=>80])?>
  </div>

  <div class="col-md-2">
    <?= $this->Html->image("public/orah_p.png", ['url' => 'http://ciis.fmrp.usp.br/orah/','height'=>80])?>
  </div>

  <div class="col-md-2">
    <?= $this->Html->image("public/brasao_fmrp_p.png", ['url' => 'http://www.fmrp.usp.br/','height'=>80])?>
  </div>

  <div class="col-md-3">
    <?= $this->Html->image("public/medicina_social_p.png", ['url' => 'http://rms.fmrp.usp.br/','height'=>80])?>
  </div>    

</div>      
