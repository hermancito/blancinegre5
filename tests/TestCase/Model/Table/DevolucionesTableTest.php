<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DevolucionesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DevolucionesTable Test Case
 */
class DevolucionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DevolucionesTable
     */
    protected $Devoluciones;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Devoluciones',
        'app.Colegios',
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
        $config = $this->getTableLocator()->exists('Devoluciones') ? [] : ['className' => DevolucionesTable::class];
        $this->Devoluciones = $this->getTableLocator()->get('Devoluciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Devoluciones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DevolucionesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\DevolucionesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
