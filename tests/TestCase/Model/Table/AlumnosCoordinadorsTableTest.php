<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnosCoordinadorsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnosCoordinadorsTable Test Case
 */
class AlumnosCoordinadorsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnosCoordinadorsTable
     */
    protected $AlumnosCoordinadors;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AlumnosCoordinadors',
        'app.Alumnos',
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
        $config = $this->getTableLocator()->exists('AlumnosCoordinadors') ? [] : ['className' => AlumnosCoordinadorsTable::class];
        $this->AlumnosCoordinadors = $this->getTableLocator()->get('AlumnosCoordinadors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AlumnosCoordinadors);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\AlumnosCoordinadorsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\AlumnosCoordinadorsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
