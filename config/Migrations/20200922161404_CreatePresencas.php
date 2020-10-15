<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',true);


class CreatePresencas extends AbstractMigration
{
    public function up()
    {
        $presenca = $this->table('presencas');
        $presenca
            ->addColumn('matricula_id', 'integer', ['limit'=>10])
            ->addColumn('turma_id', 'integer', ['limit'=>10])
            ->addColumn('data_aula', 'date')
            ->addColumn('presente', 'boolean')
            ->addForeignKey('matricula_id', 'matriculas', 'id')
            ->addForeignKey('turma_id', 'turmas', 'id')
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['presencas'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
    }
}
