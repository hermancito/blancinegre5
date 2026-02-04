<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificacionsUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificacionsUsersTable Test Case
 */
class NotificacionsUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificacionsUsersTable
     */
    protected $NotificacionsUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.NotificacionsUsers',
        'app.Notificacions',
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
        $config = $this->getTableLocator()->exists('NotificacionsUsers') ? [] : ['className' => NotificacionsUsersTable::class];
        $this->NotificacionsUsers = $this->getTableLocator()->get('NotificacionsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->NotificacionsUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\NotificacionsUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\NotificacionsUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
