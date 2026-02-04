<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfertasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfertasTable Test Case
 */
class OfertasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfertasTable
     */
    protected $Ofertas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Ofertas',
        'app.Comercials',
        'app.Ubicacions',
        'app.Ofertaspreciosacts',
        'app.Tips',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ofertas') ? [] : ['className' => OfertasTable::class];
        $this->Ofertas = $this->getTableLocator()->get('Ofertas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ofertas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\OfertasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\OfertasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
