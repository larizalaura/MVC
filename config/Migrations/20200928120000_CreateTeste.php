<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',false);

class CreateTeste extends AbstractMigration
{
    public function up()
    {
        $teste = $this->table('testes');
        $teste
            ->addColumn('teste1','string',['limit'=>100])
            ->addColumn('teste2','string',['limit'=>50])
        
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['testes'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
