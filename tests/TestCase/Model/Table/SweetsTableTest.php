<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SweetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SweetsTable Test Case
 */
class SweetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SweetsTable
     */
    public $Sweets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sweets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sweets') ? [] : ['className' => 'App\Model\Table\SweetsTable'];
        $this->Sweets = TableRegistry::get('Sweets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sweets);

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
