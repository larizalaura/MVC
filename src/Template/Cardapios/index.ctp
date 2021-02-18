<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardapio[]|\Cake\Collection\CollectionInterface $cardapios
 */
?>


<?php $this->start('scriptLib'); ?>
  <?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
  <?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
<?php $this->end(); ?>
<?php $this->start('script'); ?>

  $('#tipo').select2({
    theme:'bootstrap',
    minimumInputLength: 1
  });

  $('#texto-cardapio').select2({
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

  $('#nutricionista').select2({
    theme:'bootstrap',
    minimumInputLength: 1
  });

<?php $this->end(); ?>

  <?php $this->layout = 'creche/layout_creche' ?>

<div class="row">

    <div class="col-sm-offset-0 col-md-12">

        <div class="panel panel-primary">

            <div class="panel-heading"><b>Busca Cardapio</b></div>
            <div class="panel-body">
                <form class="form row">
                    <?= $this->Form->create('busca',['align' => 'inline','type'=>'get']);  ?>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tipo do Cardapio</label>
                            <?= $this->Form->input ('tipo',['type'=>'select','id'=>'tipo','options'=>['Almoço', 'Jantar', 'Café da manhã', 'Café da tarde'],'empty'=>'-']); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Data do Cardapio</label>
                            <?= $this->Form->input('data',['class'=>'input-sm datemask','prepend'=>'<i class="fas fa-calendar-alt"></i>']); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Horario</label>
                            <?= $this->Form->input ('identificacao',['type'=>'select','id'=>'identificacao','options'=>['08:00', '12:00', '16:00', '20:00'],'empty'=>'-']); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Descriçao do Cardapio</label>
                            <?= $this->Form->input ('texto_cardapio',['type'=>'select','id'=>'texto-cardapio','options'=>[],'empty'=>'-']); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Nutricionista</label>
                            <?= $this->Form->input ('nutricionista',['type'=>'select','id'=>'nutricionista','options'=>['Dra Helena Avaloir', 'Dr Gabriel Ramon' ],'empty'=>'-']); ?>
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
    <b>Menu dos Cardapios</b>
  </div>
    
    <table class="table">
      <thead>
        <tr>
         
          <th>Tipo do Cardapio</th>
          <th>Data</th>
          <th>Horario</th>
          <th>Descrição do Cardapio</th>
          <th>Nutricionista Responsável</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td>Café da Manhã</td>
          <td>10/01/2020</td>
          <td>08:00</td>
          <td>Bebida: Copo de Leite, Copo de suco de laranja. Acompanhamento: Pão de queijo, Bolo de fubá. Frutas: maçã, banana, laranja. </td>
          <td>Dra Helena Avaloir</td>
        </tr>
        <tr>
          
          <td>Almoço</td>
          <td>10/01/2020</td>
          <td>12:00</td>
          <td>Bebida: Suco de abacaxi, Suco de uva. Refeição: Strogonoff de frango com batata frita. Acompanhamento: Salada. </td>
          <td>Dra Helena Avaloir</td>
        </tr>
        <tr>
         
          <td>Jantar</td>
          <td>10/01/2020</td>
          <td>20:00</td>
          <td>Bebida: Suco de maracujá, Suco de uva. Refeição: Canja de galinha. Acompanhamento: Pão frances.</td>
          <td>Dr Gabriel Ramon</td>
        </tr>
        <tr>
          
          <td>Café da Tarde</td>
          <td>15/01/2020</td>
          <td>16:00</td>
          <td>Bebida: Copo de suco de laranja. Acompanhamento: Pão de queijo, Bolo de chocolate. Frutas: maçã, morango, melancia.</td>
          <td>Dra Helena Avaloir</td>
        </tr>
        <tr>
          
          <td>Almoço</td>
          <td>20/01/2020</td>
          <td>12:00</td>
          <td>Bebida: Suco de abacaxi, Suco de limão. Refeição: Arroz com calabresa e batata palha. Acompanhamento: Salada.</td>
          <td>Dr Gabriel Ramon</td>
        </tr>
        <tr>
         
          <td>Jantar</td>
          <td>20/01/2020</td>
          <td>20:00</td>
          <td>Bebida: Suco de limão. Refeição: Arroz com frango xadres. Acompanhamento: Salada.</td>
          <td>Dr Gabriel Ramon</td>
        </tr>
        <tr>
         
          <td>Café da Manhã</td>
          <td>21/01/2020</td>
          <td>08:00</td>
          <td>Bebida: Copo de Leite quente, Suco de frutas. Acompanhamento: Pão de queijo, Salada de frutas.</td>
          <td>Dra Helena Avaloir</td>
        </tr>
        <tr>
          
          <td>Café da Tarde</td>
          <td>21/01/2020</td>
          <td>16:00</td>
          <td>Bebida: Vitamina de frutas. Acompanhamento:Bolo de cenoura com cobertura de chocolate.</td>
          <td>Dra Helena Avaloir</td>
        </tr>
      </tbody>
    </table>
    
</div>
