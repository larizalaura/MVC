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
        <li><?= $this->Html->link(__('Lists Presencas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="presencas form large-9 medium-8 columns content">
    <?= $this->Form->create($presenca) ?>
    <fieldset>
        <legend><?= __('Adicionar Presenca') ?></legend>
        <?php
            echo $this->Form->control('matricula_id', ['options' => $matriculas]);
            echo $this->Form->control('turma_id', ['options' => $turmas]);
            echo $this->Form->control('data_aula');
            echo $this->Form->control('presente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
