<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',false);


class CreatePresencas extends AbstractMigration
{
    public function up()
    {
        $presenca = $this->table('presencas', ['id'=>false, 'primary_key'=>['matriculado_id','data_aula']]);
        $presenca
            ->addColumn('matriculado_id', 'integer', ['limit'=>10])
            ->addColumn('data_aula', 'date')
            ->addColumn('presente', 'boolean')
            ->addForeignKey('matriculado_id', 'matriculados', 'id')
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['presencas'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
    }
}
