<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonitorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonitorsTable Test Case
 */
class MonitorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MonitorsTable
     */
    protected $Monitors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Monitors',
        'app.Disponibilitats',
        'app.Monitorsfiles',
        'app.Sustitucions',
        'app.Volantes',
        'app.Activitats',
        'app.Activitatsgrups',
        'app.Colegios',
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
        $config = $this->getTableLocator()->exists('Monitors') ? [] : ['className' => MonitorsTable::class];
        $this->Monitors = $this->getTableLocator()->get('Monitors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Monitors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\MonitorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\MonitorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
