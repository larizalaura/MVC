<?php $this->layout = 'public' ?>

<h2 class="text-center">SISAM - Sistema de Informação em Saúde Mental</h2> </br></br></br>


<div class="row">
    <div class="col-sm-offset-3 col-md-5">


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
                    <button type="submit" class="btn btn-default">Entrar</button> 
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
        <a href="http://www.saude.sp.gov.br">
     <?= $this->Html->image("secretaria.jpg")?>
        </a>
    </div>

    <div class="col-md-2">
        <a href="http://ciis.fmrp.usp.br/orah/">
     <?= $this->Html->image("orah_p.png")?>
        </a>
    </div>

    <div class="col-md-2">
        <a href="http://www.fmrp.usp.br/">
     <?= $this->Html->image("brasao_fmrp_p.png")?>
        </a>
    </div>

    <div class="col-md-3">
        <a href="http://rms.fmrp.usp.br/">
     <?= $this->Html->image("medicina_social_p.png")?>
        </a>
    </div>    

</div>      