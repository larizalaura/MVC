<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matriculado $matriculado
 */

$this->layout = 'creche/layout_creche'
?>

<?php $this->start('scriptLib'); ?>
  <?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
  <?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
  <?= $this->Html->script('teste.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
<?php $this->end(); ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Matriculados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="matriculados form large-9 medium-8 columns content">
    <?= $this->Form->create($matriculado) ?>
    <fieldset>
        <legend><?= __('Adicionar Matriculado') ?></legend>
        <?php
            echo $this->Form->control('matricula_id', ['options' => $matriculas]);
            echo $this->Form->input('teste', ['class'=>'teste_id', 'id'=>'teste_id']);
            echo $this->Form->control('retorno', ['class'=>'ret', 'id'=>'ret']);
            echo $this->Form->control('turmas_id', ['options' => $turmas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
