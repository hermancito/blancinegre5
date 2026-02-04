<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BoletinesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BoletinesTable Test Case
 */
class BoletinesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BoletinesTable
     */
    protected $Boletines;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Boletines',
        'app.Users',
        'app.Notas',
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
        $config = $this->getTableLocator()->exists('Boletines') ? [] : ['className' => BoletinesTable::class];
        $this->Boletines = $this->getTableLocator()->get('Boletines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Boletines);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\BoletinesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\BoletinesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
