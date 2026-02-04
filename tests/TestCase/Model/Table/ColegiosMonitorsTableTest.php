<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColegiosMonitorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColegiosMonitorsTable Test Case
 */
class ColegiosMonitorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColegiosMonitorsTable
     */
    protected $ColegiosMonitors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ColegiosMonitors',
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
        $config = $this->getTableLocator()->exists('ColegiosMonitors') ? [] : ['className' => ColegiosMonitorsTable::class];
        $this->ColegiosMonitors = $this->getTableLocator()->get('ColegiosMonitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ColegiosMonitors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ColegiosMonitorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ColegiosMonitorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
