<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatriculadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatriculadosTable Test Case
 */
class MatriculadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MatriculadosTable
     */
    public $Matriculados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Matriculados',
        'app.Matriculas',
        'app.Turmas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Matriculados') ? [] : ['className' => MatriculadosTable::class];
        $this->Matriculados = TableRegistry::getTableLocator()->get('Matriculados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Matriculados);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
