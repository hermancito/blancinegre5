<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresasdosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresasdosTable Test Case
 */
class EmpresasdosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresasdosTable
     */
    protected $Empresasdos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Empresasdos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Empresasdos') ? [] : ['className' => EmpresasdosTable::class];
        $this->Empresasdos = $this->getTableLocator()->get('Empresasdos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Empresasdos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\EmpresasdosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
