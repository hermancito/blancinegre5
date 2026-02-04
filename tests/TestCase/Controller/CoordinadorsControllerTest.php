<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\CoordinadorsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CoordinadorsController Test Case
 *
 * @link \App\Controller\CoordinadorsController
 */
class CoordinadorsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Coordinadors',
        'app.Coordinadordiaris',
        'app.Coordinadorsfiles',
        'app.Alumnos',
        'app.Colegios',
        'app.Monitors',
        'app.AlumnosCoordinadors',
        'app.ColegiosCoordinadors',
        'app.CoordinadorsMonitors',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\CoordinadorsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\CoordinadorsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\CoordinadorsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\CoordinadorsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\CoordinadorsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
