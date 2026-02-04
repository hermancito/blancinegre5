<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ColegiofilesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ColegiofilesTable Test Case
 */
class ColegiofilesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ColegiofilesTable
     */
    protected $Colegiofiles;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Colegiofiles',
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
        $config = $this->getTableLocator()->exists('Colegiofiles') ? [] : ['className' => ColegiofilesTable::class];
        $this->Colegiofiles = $this->getTableLocator()->get('Colegiofiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Colegiofiles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\ColegiofilesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\ColegiofilesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
