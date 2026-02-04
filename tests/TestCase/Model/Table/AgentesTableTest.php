<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgentesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgentesTable Test Case
 */
class AgentesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgentesTable
     */
    protected $Agentes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Agentes',
        'app.Comercials',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Agentes') ? [] : ['className' => AgentesTable::class];
        $this->Agentes = $this->getTableLocator()->get('Agentes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Agentes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\AgentesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
