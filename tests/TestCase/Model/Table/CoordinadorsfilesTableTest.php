<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordinadorsfilesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordinadorsfilesTable Test Case
 */
class CoordinadorsfilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordinadorsfilesTable
     */
    protected $Coordinadorsfiles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Coordinadorsfiles',
        'app.Users',
        'app.Coordinadors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Coordinadorsfiles') ? [] : ['className' => CoordinadorsfilesTable::class];
        $this->Coordinadorsfiles = $this->getTableLocator()->get('Coordinadorsfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Coordinadorsfiles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CoordinadorsfilesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CoordinadorsfilesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
