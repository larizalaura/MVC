<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turma $turma
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Lista Turmas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="turmas form large-9 medium-8 columns content">
    <?= $this->Form->create($turma) ?>
    <fieldset>
        <legend><?= __('Adicionar Turma') ?></legend>
        <?php
            echo $this->Form->control('semestre');
            echo $this->Form->control('ano_atual');
            echo $this->Form->control('sub_id_turma');
            echo $this->Form->control('periodo');
            echo $this->Form->control('turma_ativa');
            echo $this->Form->control('total_alunos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
