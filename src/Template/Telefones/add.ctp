<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $telefone
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Telefones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="telefones form large-9 medium-8 columns content">
    <?= $this->Form->create($telefone) ?>
    <fieldset>
        <legend><?= __('Add Telefone') ?></legend>
        <?php
            echo $this->Form->control('numero');
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
