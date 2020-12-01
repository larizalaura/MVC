<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',false);

class CreateMatriculados extends AbstractMigration
{
    public function up()
    {
        $matriculado = $this->table('matriculados');
        $matriculado   
            ->addColumn('matricula_id', 'integer', ['limit'=>10, 'null'=>true])
            ->addColumn('turmas_id', 'integer', ['limit'=>10])
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->addForeignKey('matricula_id', 'matriculas', 'id')
            ->addForeignKey('turmas_id', 'turmas', 'id')
            ->create();
        
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['matriculados'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
