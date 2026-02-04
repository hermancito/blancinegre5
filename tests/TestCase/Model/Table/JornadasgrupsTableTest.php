<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JornadasgrupsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JornadasgrupsTable Test Case
 */
class JornadasgrupsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JornadasgrupsTable
     */
    protected $Jornadasgrups;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Jornadasgrups',
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
        $config = $this->getTableLocator()->exists('Jornadasgrups') ? [] : ['className' => JornadasgrupsTable::class];
        $this->Jornadasgrups = $this->getTableLocator()->get('Jornadasgrups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Jornadasgrups);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\JornadasgrupsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
