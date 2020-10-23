<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

class CreateCardapios extends AbstractMigration
{
    public function up()
    {
        $cardapio = $this->table('cardapios');
        $cardapio
            
            ->addColumn('tipo','string',['limit'=>100])
            ->addColumn('data','date',['limit'=>100])
            ->addColumn('texto_cardapio','string',['limit'=>100])
            ->addColumn('nutricionista','string',['limit'=>100])
            ->addColumn('usuario_id','integer',['null'=> true])
            ->addForeignKey('usuario_id','cardapios','id')

            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['cardapios'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
    
    }
}
