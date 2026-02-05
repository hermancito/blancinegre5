<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\DisponibilitatsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\DisponibilitatsController Test Case
 *
 * @link \App\Controller\DisponibilitatsController
 */
class DisponibilitatsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Disponibilitats',
        'app.Monitors',
        'app.Dias',
        'app.Horas',
        'app.Tiponodisponibilitats',
        'app.Activitatsgrups',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\DisponibilitatsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\DisponibilitatsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\DisponibilitatsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\DisponibilitatsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\DisponibilitatsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
