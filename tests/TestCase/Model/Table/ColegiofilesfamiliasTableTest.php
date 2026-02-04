<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColegiofilesfamiliasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColegiofilesfamiliasTable Test Case
 */
class ColegiofilesfamiliasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColegiofilesfamiliasTable
     */
    protected $Colegiofilesfamilias;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Colegiofilesfamilias',
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
        $config = $this->getTableLocator()->exists('Colegiofilesfamilias') ? [] : ['className' => ColegiofilesfamiliasTable::class];
        $this->Colegiofilesfamilias = $this->getTableLocator()->get('Colegiofilesfamilias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Colegiofilesfamilias);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ColegiofilesfamiliasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ColegiofilesfamiliasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
