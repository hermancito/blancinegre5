<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsRegistroaltasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsRegistroaltasTable Test Case
 */
class ActivitatsRegistroaltasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsRegistroaltasTable
     */
    protected $ActivitatsRegistroaltas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsRegistroaltas',
        'app.Registroaltas',
        'app.Activitats',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ActivitatsRegistroaltas') ? [] : ['className' => ActivitatsRegistroaltasTable::class];
        $this->ActivitatsRegistroaltas = $this->getTableLocator()->get('ActivitatsRegistroaltas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsRegistroaltas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsRegistroaltasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsRegistroaltasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
