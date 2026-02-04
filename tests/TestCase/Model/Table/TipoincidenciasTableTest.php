<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoincidenciasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoincidenciasTable Test Case
 */
class TipoincidenciasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoincidenciasTable
     */
    protected $Tipoincidencias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Tipoincidencias',
        'app.Personalcontrols',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipoincidencias') ? [] : ['className' => TipoincidenciasTable::class];
        $this->Tipoincidencias = $this->getTableLocator()->get('Tipoincidencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipoincidencias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\TipoincidenciasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
