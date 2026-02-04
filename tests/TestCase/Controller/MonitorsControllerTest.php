<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\MonitorsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\MonitorsController Test Case
 *
 * @link \App\Controller\MonitorsController
 */
class MonitorsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Monitors',
        'app.Disponibilitats',
        'app.Monitorsfiles',
        'app.Sustitucions',
        'app.Volantes',
        'app.Activitats',
        'app.Activitatsgrups',
        'app.Colegios',
        'app.Coordinadors',
        'app.ActivitatsMonitors',
        'app.ActivitatsgrupsMonitors',
        'app.ColegiosMonitors',
        'app.CoordinadorsMonitors',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\MonitorsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\MonitorsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\MonitorsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\MonitorsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\MonitorsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
