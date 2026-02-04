<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonitorsfilesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonitorsfilesTable Test Case
 */
class MonitorsfilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MonitorsfilesTable
     */
    protected $Monitorsfiles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Monitorsfiles',
        'app.Users',
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
        $config = $this->getTableLocator()->exists('Monitorsfiles') ? [] : ['className' => MonitorsfilesTable::class];
        $this->Monitorsfiles = $this->getTableLocator()->get('Monitorsfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Monitorsfiles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\MonitorsfilesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\MonitorsfilesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
