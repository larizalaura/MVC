<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcionario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Enderecos'), ['controller' => 'Enderecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['controller' => 'Enderecos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Informes'), ['controller' => 'Informes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Informe'), ['controller' => 'Informes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionarios form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= __('Edit Funcionario') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('data_nasc');
            echo $this->Form->control('cpf');
            echo $this->Form->control('rg');
            echo $this->Form->control('endereco_id', ['options' => $enderecos]);
            echo $this->Form->control('usuario_id', ['options' => $usuarios]);
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
