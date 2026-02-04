<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DestinosUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DestinosUsersTable Test Case
 */
class DestinosUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DestinosUsersTable
     */
    protected $DestinosUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.DestinosUsers',
        'app.Destinos',
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
        $config = $this->getTableLocator()->exists('DestinosUsers') ? [] : ['className' => DestinosUsersTable::class];
        $this->DestinosUsers = $this->getTableLocator()->get('DestinosUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DestinosUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DestinosUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\DestinosUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
