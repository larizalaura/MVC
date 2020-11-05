<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $turma->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $turma->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Turmas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Presencas'), ['controller' => 'Presencas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Presenca'), ['controller' => 'Presencas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="turmas form large-9 medium-8 columns content">
    <?= $this->Form->create($turma) ?>
    <fieldset>
        <legend><?= __('Edit Turma') ?></legend>
        <?php
            echo $this->Form->control('semestre');
            echo $this->Form->control('ano_atual');
            echo $this->Form->control('sub_id_turma');
            echo $this->Form->control('periodo');
            echo $this->Form->control('turma_ativa');
            echo $this->Form->control('total_alunos');
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
