<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $responsavel
 */
$this->layout = 'creche/layout_creche'
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $responsavel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $responsavel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Responsavel'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="responsavel form large-9 medium-8 columns content">
    <?= $this->Form->create($responsavel) ?>
    <fieldset>
        <legend><?= __('Edit Responsavel') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('data_nasc');
            echo $this->Form->control('parentesco');
            echo $this->Form->control('cpf');
            echo $this->Form->control('rg');
            echo $this->Form->control('profissao');
            echo $this->Form->control('email');
            echo $this->Form->control('endereco_id');
            echo $this->Form->control('telefone_id');
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
