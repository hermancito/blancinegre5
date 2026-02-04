<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsgrupsAlumnosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsgrupsAlumnosTable Test Case
 */
class ActivitatsgrupsAlumnosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsgrupsAlumnosTable
     */
    protected $ActivitatsgrupsAlumnos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsgrupsAlumnos',
        'app.Activitatsgrups',
        'app.Alumnos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ActivitatsgrupsAlumnos') ? [] : ['className' => ActivitatsgrupsAlumnosTable::class];
        $this->ActivitatsgrupsAlumnos = $this->getTableLocator()->get('ActivitatsgrupsAlumnos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsgrupsAlumnos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsAlumnosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsAlumnosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
