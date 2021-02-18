<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsavelalunoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsavelalunoTable Test Case
 */
class ResponsavelalunoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsavelalunoTable
     */
    public $Responsavelaluno;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Responsavelaluno',
        'app.Alunos',
        'app.Responsavel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Responsavelaluno') ? [] : ['className' => ResponsavelalunoTable::class];
        $this->Responsavelaluno = TableRegistry::getTableLocator()->get('Responsavelaluno', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Responsavelaluno);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
