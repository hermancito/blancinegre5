<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IntervencionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IntervencionsTable Test Case
 */
class IntervencionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\IntervencionsTable
     */
    protected $Intervencions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Intervencions',
        'app.Coordinadordiaris',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Intervencions') ? [] : ['className' => IntervencionsTable::class];
        $this->Intervencions = $this->getTableLocator()->get('Intervencions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Intervencions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\IntervencionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
