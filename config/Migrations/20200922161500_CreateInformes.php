<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT', false);

class CreateInformes extends AbstractMigration
{
    public function up()
    {
        $informe = $this->table('informes');
        $informe
        ->addColumn('titulo', 'string', ['limit'=> 45])
        ->addColumn('corpo', 'string', ['limit'=> 45])
        ->addColumn('funcionario_id', 'integer', ['limit'=> 10])
        ->addColumn('responsavel_id', 'integer', ['limit'=> 10])
        ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('data_delecao','datetime',['null'=>true])
        ->addForeignKey('responsavel_id', 'usuarios', 'id', [])
        ->addForeignKey('funcionario_id', 'usuarios', 'id', [])
        ->create();

        $informe_arquivos = $this->table('informes_arquivos');
        $informe_arquivos
        ->addColumn('nome', 'string', ['limit'=> 45])
        ->addColumn('extensao', 'string', ['limit'=> 4])
        ->addColumn('informe_id', 'integer', ['limit'=> 10])
        ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
        ->addColumn('data_delecao','datetime',['null'=>true])
        ->addForeignKey('informe_id', 'informes', 'id', [])
        ->create();
       
    }

    public function down()
    {

        if(DEVELOPMENT){
            $tableNames = ['informes', 'informes_arquivos'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
    
    }
}
