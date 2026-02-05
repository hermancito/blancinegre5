<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CoordinadorsMonitorsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CoordinadorsMonitorsController Test Case
 *
 * @link \App\Controller\CoordinadorsMonitorsController
 */
class CoordinadorsMonitorsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.CoordinadorsMonitors',
        'app.Coordinadors',
        'app.Monitors',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\CoordinadorsMonitorsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\CoordinadorsMonitorsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\CoordinadorsMonitorsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\CoordinadorsMonitorsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\CoordinadorsMonitorsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
