<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NotificacionpdfsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NotificacionpdfsTable Test Case
 */
class NotificacionpdfsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NotificacionpdfsTable
     */
    protected $Notificacionpdfs;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Notificacionpdfs',
        'app.Users',
        'app.Notificacions',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Notificacionpdfs') ? [] : ['className' => NotificacionpdfsTable::class];
        $this->Notificacionpdfs = $this->getTableLocator()->get('Notificacionpdfs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Notificacionpdfs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\NotificacionpdfsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\NotificacionpdfsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
