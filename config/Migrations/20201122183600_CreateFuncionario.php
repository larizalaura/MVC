<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';


class CreateFuncionario extends AbstractMigration
{
  public function up()
    {
        $funcionario = $this->table('funcionarios');
        $funcionario
        ->addColumn('nome', 'string', ['limit'=> 100])
        ->addColumn('data_nasc','date')
        ->addColumn('cpf', 'string', ['limit'=>16])
        ->addColumn('rg', 'string', ['limit'=>16])
        ->addColumn('endereco_id', 'integer', ['limit'=>10])
        ->addForeignKey('endereco_id', 'enderecos', 'id')
        ->addColumn('usuario_id', 'integer', ['limit'=>10])
        ->addForeignKey('usuario_id', 'usuarios', 'id')

        ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('data_delecao','datetime',['null'=>true])
        ->create();
       
    }

    public function down()
    {

        if(DEVELOPMENT){
            $tableNames = ['funcionarios'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
    
    }
}
