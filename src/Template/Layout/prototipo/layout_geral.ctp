<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prototipo SISTB-GB</title>
    <?= $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap.css') ?>
    <?= $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap-theme.css') ?>
    <?= $this->Html->css('/bower_components/fontawesome/css/fontawesome.css') ?>
    <?= $this->Html->css('/bower_components/fontawesome/css/all.css') ?>
    <?= $this->Html->css('/bower_components/admin-lte/dist/css/AdminLTE.css') ?>
    <?= $this->Html->css('/bower_components/admin-lte/dist/css/skins/skin-green.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body class="skin-green sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="" class="logo"><span class="logo-lg">SISTB GB</span></a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- MENU SUPERIOR DESATIVADO
            <ul class="nav navbar-nav pull-left">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Listas de Internações <i class="fa fa-fw fa-caret-down"></i></a>
                    
                    <ul class="dropdown-menu">
                        <li><a href="">HST - Transtorno Mental e DQ</a></li>
                    </ul>
                </li>
                <li><?= $this->Html->link('Leitos Gerais',['controller'=>'pages','action'=>'prototipo/list_bed']); ?></li>
                <li><?= $this->Html->link('Solicitações Gerais',['controller'=>'pages','action'=>'prototipo/list_request']); ?></li>
            </ul>
            -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                     
                    <li class="dropdown notifications-menu">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuário 001 <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><?= $this->Html->link('<i class="fa fa-home"></i> Meu Perfil',
                                    ['controller'=>'pages','action'=>'prototipo/profissional/visualizar_profissional'],['escape'=>false]); ?>
                            </li>
                            <li><?= $this->Html->link('<i class="fa fa-sign-out"></i> Sair',
                                    ['controller'=>'pages','action'=>'prototipo/principal'],['escape'=>false]); ?></li>
                            <li class="header">Unidades</li>
                            <li><?= $this->Html->link('<i class="fa fa-check" style="color: green"></i> Unidade 1',
                                    ['controller'=>'pages','action'=>'prototipo/principal_profissional'],
                                    ['escape'=>false]); ?></li>
                            <li><?= $this->Html->link('Unidade 2',
                                    ['controller'=>'pages','action'=>'prototipo/principal_profissional']) ?>
                                    </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
        </nav>
    </header>
    <?= $this->element('prototipo/menu_lateral'); ?>
    <div class="content-wrapper" style="min-height: 300px;">
        <?= $this->Flash->render() ?>
        <hgroup class="content-header">
            <h3><i class="fa <?= $this->fetch('title_icon') ?>"></i> <?= $this->fetch('title') ?></h3>
        </hgroup>
        <section class="content">
            <?= $this->fetch('content'); ?>
        </section>
    </div>
    <footer class="main-footer">
    </footer>
</div>


<?= $this->Html->script('/bower_components/jquery/dist/jquery.js') ?>
<?= $this->Html->script('/bower_components/bootstrap/dist/js/bootstrap.js') ?>
<?= $this->Html->script('/bower_components/admin-lte/dist/js/app.js') ?>
<!--?= $this->Html->script('/bower_components/handlebars/handlebars.js') ?-->

<?= $this->fetch('scriptLib') ?>
<?= $this->fetch('template') ?>

<script>
$(document).ready(function(){
    <?= $this->fetch('script') ?>
});
</script>
</body>
</html>
