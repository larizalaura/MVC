<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',false);

class CreateFuncionario extends AbstractMigration
{
    public function up()
    {
      //  $funcionario = $this->table('funcionarios');
        //$funcionario
         //   ->addColumn('nome','string',['limit'=>100])
         //   ->addForeignKey('usuario_id','usuarios','id');
    }

    public function down()
    {

    
    }
}
