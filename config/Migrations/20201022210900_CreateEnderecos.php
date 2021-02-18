<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',true);

class CreateEnderecos extends AbstractMigration
{
    public function up()
    {
        $endereco = $this->table('enderecos');
        $endereco
            ->addColumn('rua','string',['limit'=>100])
            ->addColumn('cep','integer',['limit'=>8])
            ->addColumn('numero','integer',['limit'=>5])
            ->addColumn('bairro','string',['limit'=>100])
            ->addColumn('cidade','string',['limit'=>100])
            ->addColumn('estado','string',['limit'=>100])
            ->addColumn('tipo','string',['limit'=>100, 'null' => true])
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['enderecos'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}