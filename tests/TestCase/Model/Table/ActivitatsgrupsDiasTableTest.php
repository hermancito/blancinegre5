<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsgrupsDiasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsgrupsDiasTable Test Case
 */
class ActivitatsgrupsDiasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsgrupsDiasTable
     */
    protected $ActivitatsgrupsDias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsgrupsDias',
        'app.Activitatsgrups',
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
        $config = $this->getTableLocator()->exists('ActivitatsgrupsDias') ? [] : ['className' => ActivitatsgrupsDiasTable::class];
        $this->ActivitatsgrupsDias = $this->getTableLocator()->get('ActivitatsgrupsDias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsgrupsDias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsDiasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsDiasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
