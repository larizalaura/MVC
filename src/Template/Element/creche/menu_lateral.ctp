
<!--?= $this->element('prototipo/modal_buscar_paciente_menu_lateral'); ?-->


<aside class="main-sidebar">
  <section class="sidebar">
   
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
          <i class="fas fa-user-circle"></i>
            <span>Alunos</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Novo aluno',['controller'=>'alunos','action'=>'add']); ?></li>
            <li><?= $this->Html->link('Listagem de Alunos',['controller'=>'alunos','action'=>'index']); ?></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fas fa-id-card"></i>
            <span>Matrículas</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Nova Matrícula',['controller'=>'Matriculas','action'=>'add']); ?></li>
            <li><?= $this->Html->link('Visualizar/Editar',['controller'=>'Matriculas','action'=>'listar_matriculados']); ?></li>
            <li><?= $this->Html->link('Matricular Aluno em Turma',['controller'=>'Matriculados','action'=>'add']); ?></li>
            <li><?= $this->Html->link('Matriculados',['controller'=>'Matriculados','action'=>'index']); ?></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fas fa-users"></i>
            <span>Turmas</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Nova Turma',['controller'=>'Turmas','action'=>'add']); ?></li>
            <li><?= $this->Html->link('Visualizar/Editar',['controller'=>'Turmas','action'=>'index']); ?></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fas fa-stethoscope"></i>
            <span>Anamnese</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Matrícula',['controller'=>'matriculas','action'=>'cadastrar_matriculas']); ?></li>
            <li><?= $this->Html->link('Visualizar/Editar',['controller'=>'matriculas','action'=>'prototipo/paciente/lista_paciente_tb']); ?></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-stethoscope"></i>
            <span>Informes</span>
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
            <i class="fas fa-cutlery"></i>
            <span>Cardápios</span>
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
            <span>Chamadas</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><?= $this->Html->link('Fazer chamada',['controller'=>'Presencas','action'=>'add']); ?></li>
            <li><?= $this->Html->link('Visualizar/Cadastrar',['controller'=>'Presencas','action'=>'index']); ?></li>
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