<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $responsavelaluno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Responsavelalunos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="responsavelalunos form large-9 medium-8 columns content">
    <?= $this->Form->create($responsavelaluno) ?>
    <fieldset>
        <legend><?= __('Add Responsavelaluno') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
