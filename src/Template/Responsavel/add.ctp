<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $responsavel
 */
$this->layout = 'creche/layout_creche'
?>

<?php $this->start('scriptLib'); ?>
  <?= $this->Html->script('/bower_components/select2/dist/js/select2.full.min.js') ?>
  <?= $this->Html->script('/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js') ?>
  <?= $this->Html->script('pesquisa_aluno_responsavel.js') ?>
<?php $this->end(); ?>
<?php $this->start('css'); ?>
  <?= $this->Html->css('/bower_components/select2/dist/css/select2.min.css') ?>
  <?= $this->Html->css('/bower_components/select2-bootstrap-theme/dist/select2-bootstrap.min.css') ?>
<?php $this->end(); ?>

<div class="responsavel form large-9 medium-8 columns content">
    <?= $this->Form->create($responsavel) ?>
    <fieldset>
        <legend><?= __('Adicionar Responsavel') ?></legend>
        <?php
            // Aluno
            echo $this->Form->control('pesquisar_aluno', ['clas' => 'pesquisar-aluno-responsavel', 'id' => 'pesquisar-aluno-responsavel', 'type' => 'select']);
            // Dados Cadastrais
            echo $this->Form->control('parentesco', ['options'=>['','PAI','MÃE', 'IRMÃ', 'IRMÃO', 'TIA', 'TIO', 'AVÓ', 'AVÔ']]);
            echo $this->Form->control('nome');
            echo $this->Form->control('data_nasc');
            echo $this->Form->control('cpf');
            echo $this->Form->control('rg');
            echo $this->Form->control('profissao');
            echo $this->Form->control('email');
            ?>
            <legend><?= __('Endereco') ?></legend>
            <?php
            // Endereço
            echo $this->Form->control('rua');
            echo $this->Form->control('cep');
            echo $this->Form->control('numero');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cidade');
            echo $this->Form->control('estado');
            echo $this->Form->control('tipo');
            ?>
            <legend><?= __('Contato') ?></legend>
            <?php
            // Telefone
            echo $this->Form->control('numero');
            echo $this->Form->control('tipo_tel');
            ?>
            </fieldset>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Form->end() ?>
</div>
