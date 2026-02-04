<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistrobajasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrobajasTable Test Case
 */
class RegistrobajasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistrobajasTable
     */
    protected $Registrobajas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Registrobajas',
        'app.Alumnos',
        'app.Activitatsgrups',
        'app.Colegios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Registrobajas') ? [] : ['className' => RegistrobajasTable::class];
        $this->Registrobajas = $this->getTableLocator()->get('Registrobajas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Registrobajas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\RegistrobajasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\RegistrobajasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
