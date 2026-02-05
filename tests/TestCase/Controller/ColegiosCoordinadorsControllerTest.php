<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ColegiosCoordinadorsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ColegiosCoordinadorsController Test Case
 *
 * @link \App\Controller\ColegiosCoordinadorsController
 */
class ColegiosCoordinadorsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.ColegiosCoordinadors',
        'app.Colegios',
        'app.Coordinadors',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\ColegiosCoordinadorsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\ColegiosCoordinadorsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\ColegiosCoordinadorsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\ColegiosCoordinadorsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\ColegiosCoordinadorsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
