<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiasVolantesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiasVolantesTable Test Case
 */
class DiasVolantesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DiasVolantesTable
     */
    protected $DiasVolantes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.DiasVolantes',
        'app.Dias',
        'app.Volantes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('DiasVolantes') ? [] : ['className' => DiasVolantesTable::class];
        $this->DiasVolantes = $this->getTableLocator()->get('DiasVolantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->DiasVolantes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DiasVolantesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\DiasVolantesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
