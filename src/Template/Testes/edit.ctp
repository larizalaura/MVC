<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testis $testis
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $testis->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testis->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Testes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testes form large-9 medium-8 columns content">
    <?= $this->Form->create($testis) ?>
    <fieldset>
        <legend><?= __('Edit Testis') ?></legend>
        <?php
            echo $this->Form->control('teste1');
            echo $this->Form->control('teste2');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
