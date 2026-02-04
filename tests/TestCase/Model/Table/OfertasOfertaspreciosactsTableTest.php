<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfertasOfertaspreciosactsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfertasOfertaspreciosactsTable Test Case
 */
class OfertasOfertaspreciosactsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfertasOfertaspreciosactsTable
     */
    protected $OfertasOfertaspreciosacts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.OfertasOfertaspreciosacts',
        'app.Ofertaspreciosacts',
        'app.Ofertas',
        'app.Ofertashorarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('OfertasOfertaspreciosacts') ? [] : ['className' => OfertasOfertaspreciosactsTable::class];
        $this->OfertasOfertaspreciosacts = $this->getTableLocator()->get('OfertasOfertaspreciosacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->OfertasOfertaspreciosacts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\OfertasOfertaspreciosactsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\OfertasOfertaspreciosactsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
