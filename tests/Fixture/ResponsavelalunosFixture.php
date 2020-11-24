<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResponsavelalunosFixture
 */
class ResponsavelalunosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'aluno_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'responsavel_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'responsavel_id' => ['type' => 'index', 'columns' => ['responsavel_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['aluno_id', 'responsavel_id'], 'length' => []],
            'responsavelalunos_ibfk_1' => ['type' => 'foreign', 'columns' => ['aluno_id'], 'references' => ['alunos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'responsavelalunos_ibfk_2' => ['type' => 'foreign', 'columns' => ['responsavel_id'], 'references' => ['responsaveis', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_0900_ai_ci'
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
