<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnosXmlTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnosXmlTable Test Case
 */
class AlumnosXmlTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnosXmlTable
     */
    protected $AlumnosXml;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.AlumnosXml',
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
        $config = $this->getTableLocator()->exists('AlumnosXml') ? [] : ['className' => AlumnosXmlTable::class];
        $this->AlumnosXml = $this->getTableLocator()->get('AlumnosXml', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->AlumnosXml);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @link \App\Model\Table\AlumnosXmlTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @link \App\Model\Table\AlumnosXmlTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
