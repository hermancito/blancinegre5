<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColegiosNotifcolegiosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColegiosNotifcolegiosTable Test Case
 */
class ColegiosNotifcolegiosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColegiosNotifcolegiosTable
     */
    protected $ColegiosNotifcolegios;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ColegiosNotifcolegios',
        'app.Colegios',
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
        $config = $this->getTableLocator()->exists('ColegiosNotifcolegios') ? [] : ['className' => ColegiosNotifcolegiosTable::class];
        $this->ColegiosNotifcolegios = $this->getTableLocator()->get('ColegiosNotifcolegios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ColegiosNotifcolegios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ColegiosNotifcolegiosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ColegiosNotifcolegiosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
