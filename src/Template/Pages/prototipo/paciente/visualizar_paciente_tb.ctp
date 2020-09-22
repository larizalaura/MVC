<?php $this->layout = 'prototipo/profissional' ?>
<?php $this->assign('title','Visualização das Informações do Paciente') ?>

<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_demografico" data-toggle="tab">Informações Demográficas</a></li>
    <li ><a href="#tab_informacoes_clinicas" data-toggle="tab">Informações Clínicas</a></li>
    <li><a href="#tab_exames" data-toggle="tab">Exames</a></li>
    <li><a href="#tab_dots" data-toggle="tab">DOTs</a></li>
    <li><a href="#tab_observacoes" data-toggle="tab">Observações</a></li>
    <li><a href="#tab_mudancas" data-toggle="tab">Mudanças</a></li>
    <!--
    <li><a href="#tab_cadsus" data-toggle="tab">CADSUS</a></li>
    <li><a href="#tab_timeline" data-toggle="tab">Linha do Tempo</a></li>
    <li><a href="#tab_primaria" data-toggle="tab">Atenção Primária</a></li>
    <li><a href="#tab_ambulatorial" data-toggle="tab">Atenção Ambulatorial</a></li>
    <li><a href="#tab_hospitalar" data-toggle="tab">Atenção Hospitalar</a></li>
    -->
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_demografico">
      <?= $this->element('prototipo/paciente/view_demografico'); ?>
    </div>
    <div class="tab-pane " id="tab_informacoes_clinicas">
      <?= $this->element('prototipo/paciente/view_informacoes_clinicas'); ?>
    </div>
    <div class="tab-pane" id="tab_exames">
      <?= $this->element('prototipo/exame/view_exames'); ?>
    </div>
    <div class="tab-pane" id="tab_dots">
      <?= $this->element('prototipo/dot/view_dots'); ?>
    </div>
    <div class="tab-pane" id="tab_observacoes">
      <?= $this->element('prototipo/tratamento/view_observacoes'); ?>
    </div>
    <div class="tab-pane" id="tab_mudancas">
      <?= $this->element('prototipo/mudanca/view_mudancas'); ?>
    </div>
  </div>
</div>