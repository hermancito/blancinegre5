<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitatsgrupsJornadasgrupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivitatsgrupsJornadasgrupsTable Test Case
 */
class ActivitatsgrupsJornadasgrupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivitatsgrupsJornadasgrupsTable
     */
    protected $ActivitatsgrupsJornadasgrups;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ActivitatsgrupsJornadasgrups',
        'app.Activitatsgrups',
        'app.Jornadasgrups',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ActivitatsgrupsJornadasgrups') ? [] : ['className' => ActivitatsgrupsJornadasgrupsTable::class];
        $this->ActivitatsgrupsJornadasgrups = $this->getTableLocator()->get('ActivitatsgrupsJornadasgrups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ActivitatsgrupsJornadasgrups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsJornadasgrupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ActivitatsgrupsJornadasgrupsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
