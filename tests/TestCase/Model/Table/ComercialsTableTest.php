<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComercialsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComercialsTable Test Case
 */
class ComercialsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ComercialsTable
     */
    protected $Comercials;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Comercials',
        'app.Agentes',
        'app.Empresas',
        'app.Empresados',
        'app.Empresatres',
        'app.Comercialsarxius',
        'app.Ofertas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Comercials') ? [] : ['className' => ComercialsTable::class];
        $this->Comercials = $this->getTableLocator()->get('Comercials', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Comercials);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ComercialsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ComercialsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
