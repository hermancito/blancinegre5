<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ActivitatsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ActivitatsController Test Case
 *
 * @link \App\Controller\ActivitatsController
 */
class ActivitatsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Activitats',
        'app.Activitatsgrups',
        'app.Notas',
        'app.Notificacions',
        'app.Sustitucions',
        'app.Alumnos',
        'app.Colegios',
        'app.Dias',
        'app.Monitors',
        'app.Registroaltas',
        'app.Users',
        'app.ActivitatsAlumnos',
        'app.ActivitatsColegios',
        'app.ActivitatsDias',
        'app.ActivitatsMonitors',
        'app.ActivitatsRegistroaltas',
        'app.ActivitatsUsers',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\ActivitatsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\ActivitatsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\ActivitatsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\ActivitatsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\ActivitatsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
