<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsavelalunosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsavelalunosTable Test Case
 */
class ResponsavelalunosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsavelalunosTable
     */
    public $Responsavelalunos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Responsavelalunos',
        'app.Alunos',
        'app.Responsaveis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Responsavelalunos') ? [] : ['className' => ResponsavelalunosTable::class];
        $this->Responsavelalunos = TableRegistry::getTableLocator()->get('Responsavelalunos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Responsavelalunos);

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
