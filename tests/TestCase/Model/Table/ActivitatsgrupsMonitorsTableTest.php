<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsgrupsMonitorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsgrupsMonitorsTable Test Case
 */
class ActivitatsgrupsMonitorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsgrupsMonitorsTable
     */
    protected $ActivitatsgrupsMonitors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsgrupsMonitors',
        'app.Activitatsgrups',
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
        $config = $this->getTableLocator()->exists('ActivitatsgrupsMonitors') ? [] : ['className' => ActivitatsgrupsMonitorsTable::class];
        $this->ActivitatsgrupsMonitors = $this->getTableLocator()->get('ActivitatsgrupsMonitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsgrupsMonitors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsMonitorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsMonitorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
