<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula $matricula
 */
$this->layout = 'creche/layout_creche'
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $matricula->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Matriculas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['controller' => 'Alunos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Alunos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matriculados'), ['controller' => 'Matriculados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matriculado'), ['controller' => 'Matriculados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Presencas'), ['controller' => 'Presencas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Presenca'), ['controller' => 'Presencas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matriculas form large-9 medium-8 columns content">
    <?= $this->Form->create($matricula) ?>
    <fieldset>
        <legend><?= __('Edit Matricula') ?></legend>
        <?php
            echo $this->Form->control('aluno_id', ['options' => $alunos]);
            echo $this->Form->control('tipo_vaga');
            echo $this->Form->control('data_matricula');
            echo $this->Form->control('matricula_ativa');
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
