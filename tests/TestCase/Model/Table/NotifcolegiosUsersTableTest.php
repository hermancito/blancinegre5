<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotifcolegiosUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotifcolegiosUsersTable Test Case
 */
class NotifcolegiosUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotifcolegiosUsersTable
     */
    protected $NotifcolegiosUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.NotifcolegiosUsers',
        'app.Notifcolegios',
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
        $config = $this->getTableLocator()->exists('NotifcolegiosUsers') ? [] : ['className' => NotifcolegiosUsersTable::class];
        $this->NotifcolegiosUsers = $this->getTableLocator()->get('NotifcolegiosUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->NotifcolegiosUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\NotifcolegiosUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\NotifcolegiosUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
