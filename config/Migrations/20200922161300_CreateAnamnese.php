<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';



class CreateAnamnese extends AbstractMigration
{
    public function up()
    {
        $anamnese  = $this->table('anamneses');
        $anamnese
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
            $tableNames = ['anamneses'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
