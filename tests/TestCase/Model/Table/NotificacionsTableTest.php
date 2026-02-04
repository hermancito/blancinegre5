<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificacionsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificacionsTable Test Case
 */
class NotificacionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificacionsTable
     */
    protected $Notificacions;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Notificacions',
        'app.Users',
        'app.Activitats',
        'app.Colegios',
        'app.Notificacionpdfs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Notificacions') ? [] : ['className' => NotificacionsTable::class];
        $this->Notificacions = $this->getTableLocator()->get('Notificacions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Notificacions);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\NotificacionsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\NotificacionsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
