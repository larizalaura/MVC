<?php
use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;
require_once 'MigrationUtils.php';

define('DEVELOPMENT',true);

class CreateAlunos extends AbstractMigration
{
    public function up()
    {
        $aluno = $this->table('alunos');
        $aluno
            ->addColumn('nome','string',['limit'=>100])
            ->addColumn('data_nasc','datetime')
            ->addColumn('telefone','string',['limit'=>100])
            ->addColumn('sexo','string',['limit'=>1])
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
        $matricula = $this->table('matriculas');
        $matricula
            ->addColumn('matricula_ativa', 'boolean')
            ->addColumn('aluno_id', 'integer', ['limit'=>50])
            ->addForeignKey('aluno_id', 'alunos', 'id')
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
        
        $turma = $this->table('turmas');
        $turma
            ->addColumn('semestre', 'integer', ['limit'=>4])
            ->addColumn('ano_atual', 'integer', ['limit'=>4])
            ->addColumn('sub_id_turma', 'string', ['limit'=>2])
            ->addColumn('periodo', 'string',['limit'=>5])
            ->addColumn('turma_ativa', 'boolean')
            ->addColumn('total_alunos', 'integer', ['limit'=>2])
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();

        $matriculado = $this->table('matriculados');
        $matriculado   
            ->addColumn('matricula_id', 'integer', ['limit'=>50])
            ->addColumn('turmas_id', 'string', ['limit'=>50])
            ->addForeignKey('matricula_id', 'matriculas', 'id')
            ->addForeignKey('turmas_id', 'turmas', 'id')
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
        
        $presenca = $this->table('presencas');
        $presenca
            ->addColumn('matricula_id', 'integer', ['limit'=>50])
            ->addColumn('turma_id', 'string', ['limit'=>50])
            ->addColumn('data_aula', 'datetime')
            ->addColumn('presente', 'boolean')
            ->addForeignKey('matricula_id', 'matriculas', 'id')
            ->addForeignKey('turma_id', 'turmas', 'id')
            ->addColumn('data_criacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_modificacao','datetime',['default'=>'CURRENT_TIMESTAMP'])
            ->addColumn('data_delecao','datetime',['null'=>true])
            ->create();
    }

    public function down()
    {
        if(DEVELOPMENT){
            $tableNames = ['alunos', 'matriculas', 'turmas', 'matriculados', 'presencas'];
            $util = new MigrationUtils();
            $util->checkDropAll($this,$tableNames);
        } else {
            print("Nao eh possivel deletar as tabelas arquivos. DEVELOPMENT: false");
            throw new Exception("Impossivel Reversao");
        }
        
    }
}
