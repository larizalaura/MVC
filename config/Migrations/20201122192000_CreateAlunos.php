<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',true);

class CreateAlunos extends AbstractMigration
{
    public function up()
    {
        $aluno = $this->table('alunos');
        $aluno
            ->addColumn('nome','string',['limit'=>100])
            ->addColumn('data_nasc','date')
            ->addColumn('telefone','string',['limit'=>100])
            ->addColumn('sexo','string',['limit'=>1])
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])


            ->create();
        
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['alunos'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
