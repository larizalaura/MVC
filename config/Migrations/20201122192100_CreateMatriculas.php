<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',true);


class CreateMatriculas extends AbstractMigration
{
    public function up()
    {
        $matricula = $this->table('matriculas');
        $matricula
            ->addColumn('aluno_id', 'integer', ['limit'=>10])
            ->addForeignKey('aluno_id', 'alunos', 'id')
            ->addColumn('tipo_vaga', 'string', ['limit'=>50])
            ->addColumn('data_matricula', 'date')
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['matriculas'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
    
    }
}
