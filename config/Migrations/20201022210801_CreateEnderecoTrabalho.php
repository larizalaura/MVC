<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';


class CreateEnderecoTrabalho extends AbstractMigration
{
    public function up()
    {
        $enderecotrabalho = $this->table('enderecotrabs');
        $enderecotrabalho
            ->addColumn('rua','string',['limit'=>100])
            ->addColumn('cep','integer',['limit'=>8])
            ->addColumn('numero','integer',['limit'=>5])
            ->addColumn('bairro','string',['limit'=>100])
            ->addColumn('cidade','string',['limit'=>100])


            ->addColumn('responsavel_id', 'integer', ['limit'=> 10])
            ->addForeignKey('responsavel_id','responsaveis','id')
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['enderecotrabs'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}