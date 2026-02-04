<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordinadorsMonitorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordinadorsMonitorsTable Test Case
 */
class CoordinadorsMonitorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordinadorsMonitorsTable
     */
    protected $CoordinadorsMonitors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.CoordinadorsMonitors',
        'app.Coordinadors',
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
        $config = $this->getTableLocator()->exists('CoordinadorsMonitors') ? [] : ['className' => CoordinadorsMonitorsTable::class];
        $this->CoordinadorsMonitors = $this->getTableLocator()->get('CoordinadorsMonitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->CoordinadorsMonitors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CoordinadorsMonitorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CoordinadorsMonitorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
