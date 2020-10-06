<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InformesArquivosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InformesArquivosTable Test Case
 */
class InformesArquivosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InformesArquivosTable
     */
    public $InformesArquivos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.InformesArquivos',
        'app.Informes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InformesArquivos') ? [] : ['className' => InformesArquivosTable::class];
        $this->InformesArquivos = TableRegistry::getTableLocator()->get('InformesArquivos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InformesArquivos);

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
