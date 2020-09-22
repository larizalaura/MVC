<?php
    $systemTitle = 'Sistb Guiné-Bissau';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $systemTitle ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('/vendor/css/AdminLTE.css') ?>
    <?= $this->Html->css('/vendor/css/bootstrap.min.css') ?>
    <?= $this->Html->css('/vendor/css/bootstrap-theme.min.css') ?>
    <?= $this->Html->css('public.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>

    <div class="container">
        <header class="header clearfix">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li class="active"><?= $this->Html->link(__('Login'),['controller'=>'pages','action'=>'prototipo/login'])?></li>
                    <li><?= $this->Html->link(__('Sobre'),['controller'=>'pages','action'=>'prototipo/public/sobre']) ?></li>
                    <li><?= $this->Html->link(__('Publicações'),['controller'=>'pages','action'=>'prototipo/public/publicacoes']) ?></li>
                    <li><?= $this->Html->link(__('Contato'),['controller'=>'pages','action'=>'prototipo/public/contato']) ?></li>
                </ul>
            </nav>
            <h3 class="text-muted">SISTB Guiné-Bissau</h3>
        </header>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        <footer class="footer">
            Copyright © 2019 - SISTB - Todos os direitos reservados. <br> Desenvolvido pelo Centro de Informação e Informática em Saúde (CIIS/FMRP/USP/RP-SP-Brasil)
        </footer>
    </div>
    <?= $this->Html->script('/vendor/js/jquery.js') ?>
    <?= $this->Html->script('/vendor/js/adminlte.min.js') ?>
    <?= $this->fetch('script') ?>
</body>
</html>
