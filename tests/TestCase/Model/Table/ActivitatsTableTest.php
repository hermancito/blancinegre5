<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsTable Test Case
 */
class ActivitatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsTable
     */
    protected $Activitats;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Activitats',
        'app.Activitatsgrups',
        'app.Notas',
        'app.Notificacions',
        'app.Sustitucions',
        'app.Alumnos',
        'app.Colegios',
        'app.Dias',
        'app.Monitors',
        'app.Registroaltas',
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
        $config = $this->getTableLocator()->exists('Activitats') ? [] : ['className' => ActivitatsTable::class];
        $this->Activitats = $this->getTableLocator()->get('Activitats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Activitats);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
