<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActualizautomaticasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActualizautomaticasTable Test Case
 */
class ActualizautomaticasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActualizautomaticasTable
     */
    protected $Actualizautomaticas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Actualizautomaticas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Actualizautomaticas') ? [] : ['className' => ActualizautomaticasTable::class];
        $this->Actualizautomaticas = $this->getTableLocator()->get('Actualizautomaticas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Actualizautomaticas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActualizautomaticasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
