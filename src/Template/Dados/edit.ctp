<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dado $dado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dado->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dado->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Testes'), ['controller' => 'Testes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Testis'), ['controller' => 'Testes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dados form large-9 medium-8 columns content">
    <?= $this->Form->create($dado) ?>
    <fieldset>
        <legend><?= __('Edit Dado') ?></legend>
        <?php
            echo $this->Form->control('campo');
            echo $this->Form->control('outro');
            echo $this->Form->control('teste_id', ['options' => $testes, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
