<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prototipo Creche Vovó Meca</title>
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
        <a href="" class="logo"><span class="logo-lg">Vovó Meca</span></a>
        <nav class="navbar navbar-static-top" role="navigation">
        
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
    <?= $this->element('creche/menu_lateral'); ?>
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
