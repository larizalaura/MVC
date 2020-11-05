<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PresencasFixture
 */
class PresencasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'matricula_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'turma_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_aula' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'presente' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'data_criacao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'data_modificacao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'data_delecao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'matricula_id' => ['type' => 'index', 'columns' => ['matricula_id'], 'length' => []],
            'turma_id' => ['type' => 'index', 'columns' => ['turma_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'presencas_ibfk_1' => ['type' => 'foreign', 'columns' => ['matricula_id'], 'references' => ['matriculas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'presencas_ibfk_2' => ['type' => 'foreign', 'columns' => ['turma_id'], 'references' => ['turmas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'matricula_id' => 1,
                'turma_id' => 1,
                'data_aula' => '2020-10-14',
                'presente' => 1,
                'data_criacao' => '2020-10-14 23:32:47',
                'data_modificacao' => '2020-10-14 23:32:47',
                'data_delecao' => '2020-10-14 23:32:47'
            ],
        ];
        parent::init();
    }
}
