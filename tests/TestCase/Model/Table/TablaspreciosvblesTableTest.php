<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TablaspreciosvblesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TablaspreciosvblesTable Test Case
 */
class TablaspreciosvblesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TablaspreciosvblesTable
     */
    protected $Tablaspreciosvbles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Tablaspreciosvbles',
        'app.Colegios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tablaspreciosvbles') ? [] : ['className' => TablaspreciosvblesTable::class];
        $this->Tablaspreciosvbles = $this->getTableLocator()->get('Tablaspreciosvbles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tablaspreciosvbles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\TablaspreciosvblesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
