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
            echo $this->Form->control('telefone');
            echo $this->Form->control('sexo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Form->end() ?>
</div>
