<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotasTable Test Case
 */
class NotasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotasTable
     */
    protected $Notas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Notas',
        'app.Alumnos',
        'app.Users',
        'app.Activitats',
        'app.Boletines',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Notas') ? [] : ['className' => NotasTable::class];
        $this->Notas = $this->getTableLocator()->get('Notas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Notas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\NotasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\NotasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
