<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColegiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColegiosTable Test Case
 */
class ColegiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColegiosTable
     */
    protected $Colegios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Colegios',
        'app.Tablaspreciosvbles',
        'app.Activitatsgrups',
        'app.AlumnosXml',
        'app.Colegiofiles',
        'app.Colegiofilesfamilias',
        'app.Coordinadordiaris',
        'app.Devoluciones',
        'app.Notificacions',
        'app.Personalcontrols',
        'app.Registroaltas',
        'app.Registrobajas',
        'app.Sustitucions',
        'app.Users',
        'app.Activitats',
        'app.Coordinadors',
        'app.Monitors',
        'app.Notifcolegios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Colegios') ? [] : ['className' => ColegiosTable::class];
        $this->Colegios = $this->getTableLocator()->get('Colegios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Colegios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ColegiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ColegiosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
