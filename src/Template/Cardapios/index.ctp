<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cardapio[]|\Cake\Collection\CollectionInterface $cardapios
 */
?>
<?php $this->layout = 'creche/layout_creche' ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cardapio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cardapios index large-9 medium-8 columns content">
    <h3><?= __('Cardapios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('texto_cardapio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nutricionista') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_criacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_modificacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_delecao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cardapios as $cardapio): ?>
            <tr>
                <td><?= $this->Number->format($cardapio->id) ?></td>
                <td><?= h($cardapio->tipo) ?></td>
                <td><?= h($cardapio->data) ?></td>
                <td><?= h($cardapio->texto_cardapio) ?></td>
                <td><?= h($cardapio->nutricionista) ?></td>
                <td><?= $cardapio->has('usuario') ? $this->Html->link($cardapio->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $cardapio->usuario->id]) : '' ?></td>
                <td><?= h($cardapio->data_criacao) ?></td>
                <td><?= h($cardapio->data_modificacao) ?></td>
                <td><?= h($cardapio->data_delecao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cardapio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cardapio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cardapio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardapio->id)]) ?>
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
