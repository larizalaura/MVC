<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardapio $cardapio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cardapio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cardapios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cardapios form large-9 medium-8 columns content">
    <?= $this->Form->create($cardapio) ?>
    <fieldset>
        <legend><?= __('Edit Cardapio') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('data');
            echo $this->Form->control('texto_cardapio');
            echo $this->Form->control('nutricionista');
            echo $this->Form->control('usuario_id', ['options' => $usuarios, 'empty' => true]);
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
