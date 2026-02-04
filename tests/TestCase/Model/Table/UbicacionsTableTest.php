<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UbicacionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UbicacionsTable Test Case
 */
class UbicacionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UbicacionsTable
     */
    protected $Ubicacions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Ubicacions',
        'app.Ofertas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ubicacions') ? [] : ['className' => UbicacionsTable::class];
        $this->Ubicacions = $this->getTableLocator()->get('Ubicacions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ubicacions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\UbicacionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
