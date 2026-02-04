<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SustitucionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SustitucionsTable Test Case
 */
class SustitucionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SustitucionsTable
     */
    protected $Sustitucions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Sustitucions',
        'app.Monitors',
        'app.Colegios',
        'app.Activitats',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sustitucions') ? [] : ['className' => SustitucionsTable::class];
        $this->Sustitucions = $this->getTableLocator()->get('Sustitucions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Sustitucions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\SustitucionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\SustitucionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
