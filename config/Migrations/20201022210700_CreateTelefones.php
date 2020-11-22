<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';


class CreateTelefones extends AbstractMigration
{
    public function up()
    {
        $telefone = $this->table('telefones');
        $telefone
            ->addColumn('numero','string',['limit'=>20])
            ->addColumn('tipo','string',['limit'=>50])
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['telefones'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}