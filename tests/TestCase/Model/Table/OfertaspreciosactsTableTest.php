<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfertaspreciosactsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfertaspreciosactsTable Test Case
 */
class OfertaspreciosactsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfertaspreciosactsTable
     */
    protected $Ofertaspreciosacts;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Ofertaspreciosacts',
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
        $config = $this->getTableLocator()->exists('Ofertaspreciosacts') ? [] : ['className' => OfertaspreciosactsTable::class];
        $this->Ofertaspreciosacts = $this->getTableLocator()->get('Ofertaspreciosacts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ofertaspreciosacts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\OfertaspreciosactsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
