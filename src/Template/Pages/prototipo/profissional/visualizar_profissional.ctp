<?php $this->layout = 'prototipo/layout_unidade_hospitalar' ?>
<?php $this->assign('title','Visualizar Informações do Profissional'); ?>

<?= $this->element('prototipo/panel_identificacao_profissional'); ?>

<div class="panel panel-default panel-primary">
    <div class="panel-heading">
        <b>Permissões do Usuário</b>
    </div>
    <div class="panel-body">
        <div class="box box-default color-palette-box">
        	<table class="table table-condensed table-striped">
	            <thead>
		            <tr>
		                <th>Permissão</th>
		                <th>Unidade</th>
		                <th>Setor</th>
		                <th>Data Início Permissão</th>
		                <th>Data Fim Permissão</th>
		            </tr>
	            </thead>
	            <tbody>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Agudos Geral Feminino</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Agudos Geral Masculino</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Atenção Psicossocial Feminino</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Atenção Psicossocial Masculino</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Dependente Quimico Com Comorbidade Feminino</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Dependente Quimico Com Comorbidade Masculino</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Primeiras Internação Feminino</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Primeiras Internação Masculino</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Acolhimento - Dependência Química Masculina</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Acolhimento - Transtornos Mentais</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
		            <tr>
		                <td>Médico Prestador</td>
		                <td>HST</td>
		                <td>Acolhimento - Transtornos Mentais e Dependência Química com Comorbidade</td>
		                <td>01/01/2016</td>
		                <td>01/01/2017</td>
		            </tr>
	            </tbody>
	        </table>
        </div>	
    </div>
    
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-9">
		<?= $this->Html->link('Editar',['controller'=>'pages','action'=>'prototipo/profissional/editar_profissional'],['class'=>"btn btn-block btn-lg btn-primary"]);?>
    </div>
</div>