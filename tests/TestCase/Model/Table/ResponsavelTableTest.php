<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsavelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsavelTable Test Case
 */
class ResponsavelTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsavelTable
     */
    public $Responsavel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Responsavel',
        'app.Enderecos',
        'app.Telefones',
        'app.Informes',
        'app.Responsavelaluno'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Responsavel') ? [] : ['className' => ResponsavelTable::class];
        $this->Responsavel = TableRegistry::getTableLocator()->get('Responsavel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Responsavel);

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
