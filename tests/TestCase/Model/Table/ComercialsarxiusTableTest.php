<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComercialsarxiusTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComercialsarxiusTable Test Case
 */
class ComercialsarxiusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComercialsarxiusTable
     */
    protected $Comercialsarxius;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Comercialsarxius',
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
        $config = $this->getTableLocator()->exists('Comercialsarxius') ? [] : ['className' => ComercialsarxiusTable::class];
        $this->Comercialsarxius = $this->getTableLocator()->get('Comercialsarxius', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comercialsarxius);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ComercialsarxiusTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ComercialsarxiusTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
