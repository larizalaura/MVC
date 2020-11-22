<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TelefonesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TelefonesTable Test Case
 */
class TelefonesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TelefonesTable
     */
    public $Telefones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Telefones',
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
        $config = TableRegistry::getTableLocator()->exists('Telefones') ? [] : ['className' => TelefonesTable::class];
        $this->Telefones = TableRegistry::getTableLocator()->get('Telefones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Telefones);

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
}
