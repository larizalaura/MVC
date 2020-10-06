<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Testis[]|\Cake\Collection\CollectionInterface $testes
 */
?>

<?php $this->layout = 'creche/layout_creche' ?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Testis'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="testes index large-9 medium-8 columns content">
    <h3><?= __('Testes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teste1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teste2') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($testes as $testis): ?>
            <tr>
                <td><?= $this->Number->format($testis->id) ?></td>
                <td><?= h($testis->teste1) ?></td>
                <td><?= h($testis->teste2) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $testis->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $testis->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $testis->id], ['confirm' => __('Are you sure you want to delete # {0}?', $testis->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
