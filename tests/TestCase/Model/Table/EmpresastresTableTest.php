<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresastresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresastresTable Test Case
 */
class EmpresastresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresastresTable
     */
    protected $Empresastres;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Empresastres',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Empresastres') ? [] : ['className' => EmpresastresTable::class];
        $this->Empresastres = $this->getTableLocator()->get('Empresastres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Empresastres);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\EmpresastresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
