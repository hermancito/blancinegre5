<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfertasTipsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfertasTipsTable Test Case
 */
class OfertasTipsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfertasTipsTable
     */
    protected $OfertasTips;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.OfertasTips',
        'app.Ofertas',
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
        $config = $this->getTableLocator()->exists('OfertasTips') ? [] : ['className' => OfertasTipsTable::class];
        $this->OfertasTips = $this->getTableLocator()->get('OfertasTips', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->OfertasTips);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\OfertasTipsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\OfertasTipsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
