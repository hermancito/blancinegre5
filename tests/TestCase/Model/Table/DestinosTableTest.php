<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DestinosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DestinosTable Test Case
 */
class DestinosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DestinosTable
     */
    protected $Destinos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Destinos',
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
        $config = $this->getTableLocator()->exists('Destinos') ? [] : ['className' => DestinosTable::class];
        $this->Destinos = $this->getTableLocator()->get('Destinos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Destinos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DestinosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
