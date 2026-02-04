<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HorarimonitorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HorarimonitorsTable Test Case
 */
class HorarimonitorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HorarimonitorsTable
     */
    protected $Horarimonitors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Horarimonitors',
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
        $config = $this->getTableLocator()->exists('Horarimonitors') ? [] : ['className' => HorarimonitorsTable::class];
        $this->Horarimonitors = $this->getTableLocator()->get('Horarimonitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Horarimonitors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\HorarimonitorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\HorarimonitorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
