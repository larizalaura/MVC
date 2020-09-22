<?php $this->layout = 'prototipo/public' ?>

<h2 class="text-center">SISTB - Sistema de Gerenciamento de Pacientes com Tuberculose</h2> 
<h3 class="text-center"><b>Guiné-Bissau</b></h3>

</br>
</br>
</br>


<div class="row">
    <div class="col-sm-offset-4 col-md-4">


        <div class="panel panel-primary">

            <div class="panel-heading">Login</div>

            <div class="panel-body">
                <form class="form"> 

                    <div class="form-group form-group-sm">
                        <input class="form-control" type="text" id="formGroupInputSmall" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" id="inputPassword2" placeholder="Senha">
                    </div>
                    <!-- button type="submit" class="btn btn-default">Entrar</button-->
                    <!--?= $this->Html->link("<button id='internar' type='button' class='btn btn-sm' title='Internar'>Internar</button>",
                    ['controller'=>'pages','action'=>'prototipo/hospitalar/cadastrar_internacao'],
                    ['escape'=>false]); //INTERNAR?-->
                    <?= $this->Html->link('Entrar',['controller'=>'pages','action'=>'prototipo/escolher_unidade'],['class'=>'btn btn-default'])?>
                </form>
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