<?php
use Cake\ORM\Locator\LocatorAwareTrait;
use ORM\Table;
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
use Cake\Datasource\ConnectionManager;
?>

<?php $this->layout = 'creche/layout_creche'?>

<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create(null, ['type' => 'get']) ?>
    <fieldset>
        <legend><?= __('Pesquisar Aluno') ?></legend>
        <?php
            echo $this->Form->control('id');
            $response = $response->withType('application/json')
                                 ->withStringBody(json_encode(['Foo' => 'bar']));
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Adicionar')) ?>
    <?= $this->Form->end() ?>

</div>