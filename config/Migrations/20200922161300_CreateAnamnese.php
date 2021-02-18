<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',false);

class CreateAnamnese extends AbstractMigration
{
    public function up()
    {
        $anamnese  = $this->table('anamneses');
        $anamnese
            ->addColumn('nome crianca','string',['limit'=>100])
            ->addColumn('Data nascimento','int',['limit'=>60])
            ->addColumn('logradouro','string',['limit'=>50])
            ->addColumn('Numero','int',['limit'=>50])
            ->addColumn('bairro','string',['limit'=>60])
            ->addColumn('cidade','string',['limit'=>60])
            ->addColumn('estado','string',['limit'=>60])
            ->addColumn('nome responsavel','string',['limit'=>60])
            ->addColumn('estado civil','string',['limit'=>60])
            ->addColumn('Profissao','string',['limit'=>60])
            ->addColumn('Crianca fica com quem','string',['limit'=>60])
            ->addColumn('Crianca tem algum tipo de alergia','string',['limit'=>60])
            ->addColumn('Crianca Faz algum acompanhamento','string',['limit'=>60])
            ->addColumn('Crianca Tem  alguma doenca','string',['limit'=>60])
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
