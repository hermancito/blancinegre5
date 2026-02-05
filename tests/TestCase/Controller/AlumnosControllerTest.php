<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\AlumnosController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\AlumnosController Test Case
 *
 * @link \App\Controller\AlumnosController
 */
class AlumnosControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Alumnos',
        'app.Users',
        'app.User2s',
        'app.Colegs',
        'app.Asistencias',
        'app.Boletines',
        'app.Devoluciones',
        'app.Notas',
        'app.Registroaltas',
        'app.Registrobajas',
        'app.Activitats',
        'app.Activitatsgrups',
        'app.Coordinadors',
        'app.ActivitatsAlumnos',
        'app.ActivitatsgrupsAlumnos',
        'app.AlumnosCoordinadors',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\AlumnosController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\AlumnosController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\AlumnosController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\AlumnosController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\AlumnosController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
