
<!--?= $this->element('prototipo/modal_buscar_paciente_menu_lateral'); ?-->


<aside class="main-sidebar">
  <section class="sidebar">
    <form action="" class="sidebar-form">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar Paciente"/>
        <span class="input-group-btn">
          <?= $this->Html->link('<button type="button" class="btn btn-flat" ><i class="fa fa-search"></i>
          </button>',['controller'=>'pages','action'=>'prototipo/paciente/visualizar_paciente_tb'],['escape'=>false]); ?></li>
        </span>
      </div>
    </form>
    <ul class="sidebar-menu tree" data-widget="tree">
        <!--
        <?= $this->fetch('prototipo_menu_hospitalar_lista'); ?>
        -->
        <li class="header">MENU</li>
        <li class="active"><?= $this->Html->link('<i class="fas fa-home"></i> Principal'
                ,['controller'=>'pages','action'=>'prototipo/principal_profissional']
                ,['escape'=>false]); ?></li>

        <li class="treeview">
          <a href="#">
            <i class="fas fa-user-injured"></i>
            <span>Paciente</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Cadastrar',['controller'=>'pages','action'=>'prototipo/paciente/cadastrar_paciente_tb']); ?></li>
            <li><?= $this->Html->link('Visualizar/Editar',['controller'=>'pages','action'=>'prototipo/paciente/lista_paciente_tb']); ?></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fas fa-stethoscope"></i>
            <span>Tratamento</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Cadastrar',['controller'=>'pages','action'=>'prototipo/tratamento/cadastrar_tratamento_tb']); ?></li>
            <li><?= $this->Html->link('Visualizar/Editar',['controller'=>'pages','action'=>'prototipo/tratamento/lista_tratamento_tb']); ?></li>
            <li><?= $this->Html->link('Adicionar Observações',['controller'=>'pages','action'=>'prototipo/tratamento/lista_tratamento_observacao_tb']); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-x-ray"></i>
            <span>Exames</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Visualizar/Cadastrar',['controller'=>'pages','action'=>'prototipo/exames/escolha_tratamento_exame_tb']); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-clipboard"></i>
            <span>Supervisão</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Cadastrar DOT',['controller'=>'pages','action'=>'prototipo/tratamento/cadastrar_dot']); ?></li>
            <li><?= $this->Html->link('Cadastrar DOT Calendario',['controller'=>'pages','action'=>'prototipo/tratamento/cadastrar_dot_calendario']); ?></li>
            <li><?= $this->Html->link('Visualizar',['controller'=>'pages','action'=>'prototipo/tratamento/visualizar_supervisao']); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-exchange-alt"></i>
            <span>Mudanças</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Internações',['controller'=>'pages','action'=>'prototipo/mudanca/escolha_tratamento_internacao_tb']); ?></li>
            <li><?= $this->Html->link('Transferências',['controller'=>'pages','action'=>'prototipo/mudanca/escolha_tratamento_transferencia_tb']); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-door-open"></i>
            <span>Finalizações</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Visualizar/Editar',['controller'=>'pages','action'=>'prototipo/resultado/escolha_tratamento_resultado_tb']); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-chart-pie"></i>
            <span>Relatórios</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Relatório TB',['controller'=>'pages','action'=>'prototipo/tratamento/relatorio']); ?></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="">
            <i class="fa fa-cog"></i>
            <span>Gerência (*em criação)</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Dados da Unidade',['controller'=>'pages','action'=>'prototipo/unidade/cadastrar_unidade']); ?></li>
            <li><?= $this->Html->link('Cadastro de Unidades',['controller'=>'pages','action'=>'prototipo/unidade/cadastrar_setores']); ?></li>
            <li><?= $this->Html->link('Cadastro de Usuário',['controller'=>'pages','action'=>'prototipo/profissional/cadastrar_usuario']); ?></li>
            <li><?= $this->Html->link('Lista de Unidades',['controller'=>'pages','action'=>'prototipo/unidade/listar_setores']); ?></li>
            <li><?= $this->Html->link('Lista de Usuários',['controller'=>'pages','action'=>'prototipo/profissional/listar_usuarios']); ?></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="">
            <i class="fa fa-question"></i>
            <span>Ajuda (*em criação)</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Tutoriais</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Atualizações</a></li>
          </ul>
        </li>
    </ul>
  </section>
</aside>
<?php $this->append('script'); ?>
            
    
<?php $this->end(); ?>