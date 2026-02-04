<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ColegiosController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ColegiosController Test Case
 *
 * @link \App\Controller\ColegiosController
 */
class ColegiosControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Colegios',
        'app.Tablaspreciosvbles',
        'app.Activitatsgrups',
        'app.AlumnosXml',
        'app.Colegiofiles',
        'app.Colegiofilesfamilias',
        'app.Coordinadordiaris',
        'app.Devoluciones',
        'app.Notificacions',
        'app.Personalcontrols',
        'app.Registroaltas',
        'app.Registrobajas',
        'app.Sustitucions',
        'app.Users',
        'app.Activitats',
        'app.Coordinadors',
        'app.Monitors',
        'app.Notifcolegios',
        'app.ActivitatsColegios',
        'app.ColegiosCoordinadors',
        'app.ColegiosMonitors',
        'app.ColegiosNotifcolegios',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\ColegiosController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\ColegiosController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\ColegiosController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\ColegiosController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\ColegiosController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
