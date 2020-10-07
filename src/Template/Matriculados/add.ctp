<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matriculado $matriculado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Matriculados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Turmas'), ['controller' => 'Turmas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turmas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="matriculados form large-9 medium-8 columns content">
    <?= $this->Form->create($matriculado) ?>
    <fieldset>
        <legend><?= __('Add Matriculado') ?></legend>
        <?php
            echo $this->Form->control('matricula_id', ['options' => $matriculas]);
            echo $this->Form->control('turmas_id', ['options' => $turmas]);
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
