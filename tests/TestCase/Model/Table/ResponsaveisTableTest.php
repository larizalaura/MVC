<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsaveisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsaveisTable Test Case
 */
class ResponsaveisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsaveisTable
     */
    public $Responsaveis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Responsaveis',
        'app.Usuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Responsaveis') ? [] : ['className' => ResponsaveisTable::class];
        $this->Responsaveis = TableRegistry::getTableLocator()->get('Responsaveis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Responsaveis);

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
