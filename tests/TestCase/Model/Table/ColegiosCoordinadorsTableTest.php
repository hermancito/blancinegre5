<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColegiosCoordinadorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColegiosCoordinadorsTable Test Case
 */
class ColegiosCoordinadorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColegiosCoordinadorsTable
     */
    protected $ColegiosCoordinadors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ColegiosCoordinadors',
        'app.Colegios',
        'app.Coordinadors',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('ColegiosCoordinadors') ? [] : ['className' => ColegiosCoordinadorsTable::class];
        $this->ColegiosCoordinadors = $this->getTableLocator()->get('ColegiosCoordinadors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ColegiosCoordinadors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ColegiosCoordinadorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ColegiosCoordinadorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
