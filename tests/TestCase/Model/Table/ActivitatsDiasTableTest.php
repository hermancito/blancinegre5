<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsDiasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsDiasTable Test Case
 */
class ActivitatsDiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsDiasTable
     */
    protected $ActivitatsDias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsDias',
        'app.Activitats',
        'app.Dias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ActivitatsDias') ? [] : ['className' => ActivitatsDiasTable::class];
        $this->ActivitatsDias = $this->getTableLocator()->get('ActivitatsDias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsDias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsDiasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsDiasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
