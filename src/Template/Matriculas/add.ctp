<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula $matricula
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Lista Matriculas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="matriculas form large-9 medium-8 columns content">
    <?= $this->Form->create($matricula) ?>
    <fieldset>
        <legend><?= __('Adicionar Matricula') ?></legend>
        <?php
            echo $this->Form->control('matricula_ativa', ['default' => true]);
            echo $this->Form->control('aluno_id', ['options' => $alunos]);
            echo $this->Form->control('nome', ['options' => $alunos]);
            echo $this->Form->control('ano_matricula');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
