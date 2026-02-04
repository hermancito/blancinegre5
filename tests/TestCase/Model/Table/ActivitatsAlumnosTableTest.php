<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsAlumnosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsAlumnosTable Test Case
 */
class ActivitatsAlumnosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsAlumnosTable
     */
    protected $ActivitatsAlumnos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsAlumnos',
        'app.Activitats',
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
        $config = $this->getTableLocator()->exists('ActivitatsAlumnos') ? [] : ['className' => ActivitatsAlumnosTable::class];
        $this->ActivitatsAlumnos = $this->getTableLocator()->get('ActivitatsAlumnos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsAlumnos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsAlumnosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsAlumnosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
