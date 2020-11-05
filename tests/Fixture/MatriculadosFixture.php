<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MatriculadosFixture
 */
class MatriculadosFixture extends TestFixture
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
        'turmas_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_criacao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'data_modificacao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'data_delecao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'matricula_id' => ['type' => 'index', 'columns' => ['matricula_id'], 'length' => []],
            'turmas_id' => ['type' => 'index', 'columns' => ['turmas_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'matriculados_ibfk_1' => ['type' => 'foreign', 'columns' => ['matricula_id'], 'references' => ['matriculas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'matriculados_ibfk_2' => ['type' => 'foreign', 'columns' => ['turmas_id'], 'references' => ['turmas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'turmas_id' => 1,
                'data_criacao' => '2020-10-14 23:32:39',
                'data_modificacao' => '2020-10-14 23:32:39',
                'data_delecao' => '2020-10-14 23:32:39'
            ],
        ];
        parent::init();
    }
}
