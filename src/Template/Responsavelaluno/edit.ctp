<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Responsavelaluno $responsavelaluno
 */
$this->layout = 'creche/layout_creche'
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $responsavelaluno->aluno_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $responsavelaluno->aluno_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Responsavelaluno'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="responsavelaluno form large-9 medium-8 columns content">
    <?= $this->Form->create($responsavelaluno) ?>
    <fieldset>
        <legend><?= __('Edit Responsavelaluno') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
