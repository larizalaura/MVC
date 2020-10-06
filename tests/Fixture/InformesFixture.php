<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InformesFixture
 */
class InformesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'titulo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'corpo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'funcionario_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'responsavel_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_criacao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => '', 'precision' => null],
        'data_modificacao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'current_timestamp()', 'comment' => '', 'precision' => null],
        'data_delecao' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'responsavel_id' => ['type' => 'index', 'columns' => ['responsavel_id'], 'length' => []],
            'funcionario_id' => ['type' => 'index', 'columns' => ['funcionario_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'informes_ibfk_1' => ['type' => 'foreign', 'columns' => ['responsavel_id'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'informes_ibfk_2' => ['type' => 'foreign', 'columns' => ['funcionario_id'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
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
                'titulo' => 'Lorem ipsum dolor sit amet',
                'corpo' => 'Lorem ipsum dolor sit amet',
                'funcionario_id' => 1,
                'responsavel_id' => 1,
                'data_criacao' => '2020-10-06 22:23:22',
                'data_modificacao' => '2020-10-06 22:23:22',
                'data_delecao' => '2020-10-06 22:23:22'
            ],
        ];
        parent::init();
    }
}
