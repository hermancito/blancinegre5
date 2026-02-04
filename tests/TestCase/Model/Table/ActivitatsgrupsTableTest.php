<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsgrupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsgrupsTable Test Case
 */
class ActivitatsgrupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsgrupsTable
     */
    protected $Activitatsgrups;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Activitatsgrups',
        'app.Activitats',
        'app.Colegios',
        'app.Asistencias',
        'app.Disponibilitats',
        'app.Registrobajas',
        'app.ActivitatsMonitors',
        'app.Alumnos',
        'app.Dias',
        'app.Jornadasgrups',
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
        $config = $this->getTableLocator()->exists('Activitatsgrups') ? [] : ['className' => ActivitatsgrupsTable::class];
        $this->Activitatsgrups = $this->getTableLocator()->get('Activitatsgrups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Activitatsgrups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
