<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FedexShipmentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FedexShipmentsTable Test Case
 */
class FedexShipmentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FedexShipmentsTable
     */
    protected $FedexShipments;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.FedexShipments',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FedexShipments') ? [] : ['className' => FedexShipmentsTable::class];
        $this->FedexShipments = $this->getTableLocator()->get('FedexShipments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FedexShipments);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FedexShipmentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
