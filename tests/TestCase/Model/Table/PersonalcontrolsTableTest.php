<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonalcontrolsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonalcontrolsTable Test Case
 */
class PersonalcontrolsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonalcontrolsTable
     */
    protected $Personalcontrols;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Personalcontrols',
        'app.Users',
        'app.Tipoincidencias',
        'app.Actors',
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
        $config = $this->getTableLocator()->exists('Personalcontrols') ? [] : ['className' => PersonalcontrolsTable::class];
        $this->Personalcontrols = $this->getTableLocator()->get('Personalcontrols', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Personalcontrols);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\PersonalcontrolsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\PersonalcontrolsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
