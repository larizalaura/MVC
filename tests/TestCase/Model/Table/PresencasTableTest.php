<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresencasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresencasTable Test Case
 */
class PresencasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PresencasTable
     */
    public $Presencas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Presencas',
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
        $config = TableRegistry::getTableLocator()->exists('Presencas') ? [] : ['className' => PresencasTable::class];
        $this->Presencas = TableRegistry::getTableLocator()->get('Presencas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Presencas);

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
