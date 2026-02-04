<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsUsersTable Test Case
 */
class ActivitatsUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsUsersTable
     */
    protected $ActivitatsUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsUsers',
        'app.Activitats',
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
        $config = $this->getTableLocator()->exists('ActivitatsUsers') ? [] : ['className' => ActivitatsUsersTable::class];
        $this->ActivitatsUsers = $this->getTableLocator()->get('ActivitatsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
