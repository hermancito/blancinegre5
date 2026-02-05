<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\AlumnosCoordinadorsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\AlumnosCoordinadorsController Test Case
 *
 * @link \App\Controller\AlumnosCoordinadorsController
 */
class AlumnosCoordinadorsControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @link \App\Controller\AlumnosCoordinadorsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\AlumnosCoordinadorsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\AlumnosCoordinadorsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\AlumnosCoordinadorsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\AlumnosCoordinadorsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
