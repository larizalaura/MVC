<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InformesArquivo $informesArquivo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $informesArquivo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $informesArquivo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Informes Arquivos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Informes'), ['controller' => 'Informes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Informe'), ['controller' => 'Informes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="informesArquivos form large-9 medium-8 columns content">
    <?= $this->Form->create($informesArquivo) ?>
    <fieldset>
        <legend><?= __('Edit Informes Arquivo') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('extensao');
            echo $this->Form->control('informe_id', ['options' => $informes]);
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
