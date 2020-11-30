<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsavei $responsavei
 */
$this->layout = 'creche/layout_creche'?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Responsaveis'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="responsaveis form large-9 medium-8 columns content">
    <?= $this->Form->create($responsavei) ?>
    <fieldset>
        <legend><?= __('Add Responsavei') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('data_nasc');
            echo $this->Form->control('parentesco');
            echo $this->Form->control('cpf');
            echo $this->Form->control('rg');
            echo $this->Form->control('profissao');
            echo $this->Form->control('email');
            echo $this->Form->control('endereco_id');
            echo $this->Form->control('aluno_id');
            echo $this->Form->control('telefone_id');
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
