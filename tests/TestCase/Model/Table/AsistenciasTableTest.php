<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsistenciasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsistenciasTable Test Case
 */
class AsistenciasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AsistenciasTable
     */
    protected $Asistencias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Asistencias',
        'app.Alumnos',
        'app.Activitatsgrups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Asistencias') ? [] : ['className' => AsistenciasTable::class];
        $this->Asistencias = $this->getTableLocator()->get('Asistencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Asistencias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\AsistenciasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\AsistenciasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
