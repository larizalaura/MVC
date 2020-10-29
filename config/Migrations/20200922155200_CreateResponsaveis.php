<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT', false);

class CreateResponsaveis extends AbstractMigration
{
    public function up()
    {
        $responsavel = $this->table('responsaveis');
        $responsavel
        ->addColumn('nome', 'string', ['limit'=> 100])
        ->addColumn('data_nasc','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('parentesco', 'string', ['limit'=>100])
        ->addColumn('cpf', 'string', ['limit'=>16])
        ->addColumn('rg', 'string', ['limit'=>16])
        ->addColumn('profissao', 'string', ['limit'=>100])
        ->addColumn('email', 'string', ['limit'=>100])


        ->addColumn('aluno_id', 'integer', ['limit'=> 10])
        ->addColumn('usuario_id', 'integer', ['limit'=> 10])
        ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('data_delecao','datetime',['null'=>true])
        ->addForeignKey('usuario_id', 'usuarios', 'id', [])
        ->create();
       
    }

    public function down()
    {

        if(DEVELOPMENT){
            $tableNames = ['responsaveis'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
    
    }
}