<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistroaltasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistroaltasTable Test Case
 */
class RegistroaltasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistroaltasTable
     */
    protected $Registroaltas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Registroaltas',
        'app.Colegios',
        'app.Alumnos',
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
        $config = $this->getTableLocator()->exists('Registroaltas') ? [] : ['className' => RegistroaltasTable::class];
        $this->Registroaltas = $this->getTableLocator()->get('Registroaltas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Registroaltas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\RegistroaltasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\RegistroaltasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
