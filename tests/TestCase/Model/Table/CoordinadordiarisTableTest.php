<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordinadordiarisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordinadordiarisTable Test Case
 */
class CoordinadordiarisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordinadordiarisTable
     */
    protected $Coordinadordiaris;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Coordinadordiaris',
        'app.Colegios',
        'app.Coordinadors',
        'app.Intervencions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Coordinadordiaris') ? [] : ['className' => CoordinadordiarisTable::class];
        $this->Coordinadordiaris = $this->getTableLocator()->get('Coordinadordiaris', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Coordinadordiaris);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CoordinadordiarisTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\CoordinadordiarisTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
