<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',true);

class CreateResponsavelAluno extends AbstractMigration
{
    public function up()
    {
        $responsavelaluno = $this->table('responsavelalunos', ['id' => false, 'primary_key' =>['aluno_id', 'responsavel_id']]);
        $responsavelaluno   
        ->addColumn('aluno_id', 'integer', ['limit'=>10])
        ->addForeignKey('aluno_id', 'alunos', 'id')
        ->addColumn('responsavel_id', 'integer', ['limit'=>10])
        ->addForeignKey('responsavel_id', 'responsaveis', 'id')

        ->create();
        
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['responsavelalunos'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
