<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsMonitorsActivitatsgrupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsMonitorsActivitatsgrupsTable Test Case
 */
class ActivitatsMonitorsActivitatsgrupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsMonitorsActivitatsgrupsTable
     */
    protected $ActivitatsMonitorsActivitatsgrups;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsMonitorsActivitatsgrups',
        'app.ActivitatsMonitors',
        'app.Activitatsgrups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ActivitatsMonitorsActivitatsgrups') ? [] : ['className' => ActivitatsMonitorsActivitatsgrupsTable::class];
        $this->ActivitatsMonitorsActivitatsgrups = $this->getTableLocator()->get('ActivitatsMonitorsActivitatsgrups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsMonitorsActivitatsgrups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsMonitorsActivitatsgrupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsMonitorsActivitatsgrupsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
