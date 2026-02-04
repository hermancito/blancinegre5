<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ActivitatsgrupsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ActivitatsgrupsController Test Case
 *
 * @link \App\Controller\ActivitatsgrupsController
 */
class ActivitatsgrupsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Activitatsgrups',
        'app.Activitats',
        'app.Colegios',
        'app.Asistencias',
        'app.Disponibilitats',
        'app.Registrobajas',
        'app.ActivitatsMonitors',
        'app.Alumnos',
        'app.Dias',
        'app.Jornadasgrups',
        'app.Monitors',
        'app.ActivitatsMonitorsActivitatsgrups',
        'app.ActivitatsgrupsAlumnos',
        'app.ActivitatsgrupsDias',
        'app.ActivitatsgrupsJornadasgrups',
        'app.ActivitatsgrupsMonitors',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\ActivitatsgrupsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\ActivitatsgrupsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\ActivitatsgrupsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\ActivitatsgrupsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\ActivitatsgrupsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
