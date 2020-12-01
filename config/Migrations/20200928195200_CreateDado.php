<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',false);

class CreateDado extends AbstractMigration
{
    public function up()
    {
        $dado = $this->table('dados');
        $dado
            ->addColumn('campo','string',['limit'=>100])
            ->addColumn('outro','string',['limit'=>50])

            ->addColumn('teste_id','integer', ['null' => true])
            ->addForeignKey('teste_id','testes','id')
        
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['dados'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
