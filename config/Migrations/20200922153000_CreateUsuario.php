<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',false);

class CreateUsuario extends AbstractMigration
{
    public function up()
    {
        $usuario = $this->table('usuarios');
        $usuario
            ->addColumn('nome','string',['limit'=>100])
            ->addColumn('usuario','string',['limit'=>50])
            ->addColumn('senha','string',['limit'=>60])
            ->addColumn('ativo','boolean',['default'=>true])
            ->addColumn('admin','boolean',['default'=>false])
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['usuarios'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
