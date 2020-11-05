<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>

<?php $this->layout = 'creche/layout_creche'?>


<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create(null, ['type' => 'post']) ?>
    <legend><?= __('Pesquisar Aluno') ?></legend>
    <fieldset>
        <?php
            echo $this->Form->control('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Pesquisar')) ?>
    <?= $this->Form->end() ?>
    <br>
</div>


