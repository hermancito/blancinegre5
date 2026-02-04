<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfertashorariosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfertashorariosTable Test Case
 */
class OfertashorariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfertashorariosTable
     */
    protected $Ofertashorarios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Ofertashorarios',
        'app.OfertasOfertaspreciosacts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ofertashorarios') ? [] : ['className' => OfertashorariosTable::class];
        $this->Ofertashorarios = $this->getTableLocator()->get('Ofertashorarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ofertashorarios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\OfertashorariosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
