<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Presenca $presenca
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $presenca->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $presenca->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Presencas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Turmas'), ['controller' => 'Turmas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turma'), ['controller' => 'Turmas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="presencas form large-9 medium-8 columns content">
    <?= $this->Form->create($presenca) ?>
    <fieldset>
        <legend><?= __('Edit Presenca') ?></legend>
        <?php
            echo $this->Form->control('matricula_id', ['options' => $matriculas]);
            echo $this->Form->control('turma_id', ['options' => $turmas]);
            echo $this->Form->control('data_aula');
            echo $this->Form->control('presente');
            echo $this->Form->control('data_criacao');
            echo $this->Form->control('data_modificacao');
            echo $this->Form->control('data_delecao', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
