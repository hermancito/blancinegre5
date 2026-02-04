<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotifmonitorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotifmonitorsTable Test Case
 */
class NotifmonitorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotifmonitorsTable
     */
    protected $Notifmonitors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Notifmonitors',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Notifmonitors') ? [] : ['className' => NotifmonitorsTable::class];
        $this->Notifmonitors = $this->getTableLocator()->get('Notifmonitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Notifmonitors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\NotifmonitorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\NotifmonitorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
