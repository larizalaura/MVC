<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
use Cake\Datasource\ConnectionManager;
?>

<?php $this->layout = 'creche/layout_creche'?>

<?php 
    $dns = 'mysql://root:Barao@123@localhost/creche';
    ConnectionManager::setConfig('dafult', ['url' => $dns]);

    $connection = ConnectionManager::get('default');

    $results = $connection->prepare('SELECT * FROM alunos');
    $results->execute();
    $results->fetchAll('assoc');
    
    ?>

    <div class="panel panel-primary">
    <div class="panel-heading" ><h3><?= __('Pesquisa') ?></h3></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?> </th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data_nasc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result): ?>
                <tr>
                    <td><?= $this->Number->format($result[0]) ?></td>
                    <td><?= h($result[1]) ?></td>
                    <td><?= h($result[2]) ?></td>
                    <td><?= h($result[3]) ?></td>
                    <td><?= h($result[4]) ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>

    </table>
    </div>
    </div>
