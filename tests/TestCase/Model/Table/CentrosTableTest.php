<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CentrosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CentrosTable Test Case
 */
class CentrosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CentrosTable
     */
    protected $Centros;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Centros',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Centros') ? [] : ['className' => CentrosTable::class];
        $this->Centros = $this->getTableLocator()->get('Centros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Centros);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\CentrosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
