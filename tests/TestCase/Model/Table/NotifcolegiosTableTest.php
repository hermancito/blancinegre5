<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotifcolegiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotifcolegiosTable Test Case
 */
class NotifcolegiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotifcolegiosTable
     */
    protected $Notifcolegios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Notifcolegios',
        'app.Users',
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
        $config = $this->getTableLocator()->exists('Notifcolegios') ? [] : ['className' => NotifcolegiosTable::class];
        $this->Notifcolegios = $this->getTableLocator()->get('Notifcolegios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Notifcolegios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\NotifcolegiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\NotifcolegiosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
