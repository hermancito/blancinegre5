<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordinadorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordinadorsTable Test Case
 */
class CoordinadorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordinadorsTable
     */
    protected $Coordinadors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Coordinadors',
        'app.Coordinadordiaris',
        'app.Coordinadorsfiles',
        'app.Alumnos',
        'app.Colegios',
        'app.Monitors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Coordinadors') ? [] : ['className' => CoordinadorsTable::class];
        $this->Coordinadors = $this->getTableLocator()->get('Coordinadors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Coordinadors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CoordinadorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CoordinadorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
