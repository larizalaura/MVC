<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $endereco
 */
$this->layout = 'creche/layout_creche'?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enderecos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enderecos form large-9 medium-8 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= __('Add Endereco') ?></legend>
        <?php
            echo $this->Form->control('rua');
            echo $this->Form->control('cep');
            echo $this->Form->control('numero');
            echo $this->Form->control('bairro');
            echo $this->Form->control('cidade');
            echo $this->Form->control('estado');
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
