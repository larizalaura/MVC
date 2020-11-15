<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>

<?php $this->layout = 'creche/layout_creche' ?>

<?php $this->start('scriptLib'); ?>
<?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
<?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
<?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
<?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
<?php $this->end(); ?>

<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create(null, ['type' => 'post']) ?>
    <legend><?= __('Pesquisar Aluno') ?></legend>
    <fieldset>
        <?php
        echo $this->Form->input('id', ['class' => 'teste']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Pesquisar')) ?>
    <?= $this->Form->end() ?>
    <br>
</div>