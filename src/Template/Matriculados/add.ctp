<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matriculado $matriculado
 */

$this->layout = 'creche/layout_creche'

?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Matriculados'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="matriculados form large-9 medium-8 columns content">
    <?= $this->Form->create($matriculado) ?>
    <fieldset>
        <legend><?= __('Adicionar Matriculado') ?></legend>
        <?php
            echo $this->Form->control('matricula_id', ['options' => $matriculas]);
            echo $this->Form->control('turmas_id', ['options' => $turmas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
