<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */

$this->layout = 'creche/layout_creche'?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Listagem de alunos'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Adicionar Aluno') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('data_nasc');
            echo $this->Form->control('sexo');
        ?>
        <legend><?= __('Adicionar Endereco') ?></legend>
        <?php
            echo $this->Form->control('rua');
            echo $this->Form->control('numero');
            echo $this->Form->control('cep');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cidade');
            echo $this->Form->control('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Form->end() ?>
</div>