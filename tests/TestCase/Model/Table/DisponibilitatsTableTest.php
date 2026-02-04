<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisponibilitatsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisponibilitatsTable Test Case
 */
class DisponibilitatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DisponibilitatsTable
     */
    protected $Disponibilitats;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Disponibilitats',
        'app.Monitors',
        'app.Dias',
        'app.Horas',
        'app.Tiponodisponibilitats',
        'app.Activitatsgrups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Disponibilitats') ? [] : ['className' => DisponibilitatsTable::class];
        $this->Disponibilitats = $this->getTableLocator()->get('Disponibilitats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Disponibilitats);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\DisponibilitatsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\DisponibilitatsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
