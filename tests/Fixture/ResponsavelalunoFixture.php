<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResponsavelalunoFixture
 */
class ResponsavelalunoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'responsavelaluno';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'aluno_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'responsavel_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'responsavel_id' => ['type' => 'index', 'columns' => ['responsavel_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['aluno_id', 'responsavel_id'], 'length' => []],
            'responsavelaluno_ibfk_1' => ['type' => 'foreign', 'columns' => ['aluno_id'], 'references' => ['alunos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'responsavelaluno_ibfk_2' => ['type' => 'foreign', 'columns' => ['responsavel_id'], 'references' => ['responsavel', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'aluno_id' => 1,
                'responsavel_id' => 1
            ],
        ];
        parent::init();
    }
}
