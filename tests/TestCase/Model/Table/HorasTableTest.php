<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HorasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HorasTable Test Case
 */
class HorasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HorasTable
     */
    protected $Horas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Horas',
        'app.Disponibilitats',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Horas') ? [] : ['className' => HorasTable::class];
        $this->Horas = $this->getTableLocator()->get('Horas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Horas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\HorasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
