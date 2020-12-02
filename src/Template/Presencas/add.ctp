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
        <li><?= $this->Html->link(__('List Presencas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matriculados'), ['controller' => 'Matriculados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matriculado'), ['controller' => 'Matriculados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="presencas form large-9 medium-8 columns content">
    <?= $this->Form->create($presenca) ?>
    <fieldset>
        <legend><?= __('Add Presenca') ?></legend>
        <?php
            echo $this->Form->control('matriculado_id', ['options' => $matriculados]);
            echo $this->Form->control('data_aula');
            echo $this->Form->control('presente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
