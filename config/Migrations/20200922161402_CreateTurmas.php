<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',true);

class CreateTurmas extends AbstractMigration
{
    public function up()
    {

        $turma = $this->table('turmas');
        $turma
            ->addColumn('semestre', 'integer', ['limit'=>4])
            ->addColumn('ano_atual', 'integer', ['limit'=>4])
            ->addColumn('sub_id_turma', 'string', ['limit'=>2])
            ->addColumn('periodo', 'string',['limit'=>5])
            ->addColumn('turma_ativa', 'boolean')
            ->addColumn('total_alunos', 'integer', ['limit'=>2])
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();       
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['turmas'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
