<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Informe $informe
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Informes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Informes Arquivos'), ['controller' => 'InformesArquivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Informes Arquivo'), ['controller' => 'InformesArquivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="informes form large-9 medium-8 columns content">
    <?= $this->Form->create($informe) ?>
    <fieldset>
        <legend><?= __('Add Informe') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('corpo');
            echo $this->Form->control('funcionario_id');
            echo $this->Form->control('responsavel_id', ['options' => $usuarios]);
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
