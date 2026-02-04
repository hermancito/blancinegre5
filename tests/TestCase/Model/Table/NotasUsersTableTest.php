<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotasUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotasUsersTable Test Case
 */
class NotasUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotasUsersTable
     */
    protected $NotasUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.NotasUsers',
        'app.Notas',
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
        $config = $this->getTableLocator()->exists('NotasUsers') ? [] : ['className' => NotasUsersTable::class];
        $this->NotasUsers = $this->getTableLocator()->get('NotasUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->NotasUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\NotasUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\NotasUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
