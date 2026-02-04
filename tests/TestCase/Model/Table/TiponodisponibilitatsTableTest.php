<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiponodisponibilitatsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiponodisponibilitatsTable Test Case
 */
class TiponodisponibilitatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiponodisponibilitatsTable
     */
    protected $Tiponodisponibilitats;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Tiponodisponibilitats',
        'app.Disponibilitats',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tiponodisponibilitats') ? [] : ['className' => TiponodisponibilitatsTable::class];
        $this->Tiponodisponibilitats = $this->getTableLocator()->get('Tiponodisponibilitats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tiponodisponibilitats);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\TiponodisponibilitatsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
