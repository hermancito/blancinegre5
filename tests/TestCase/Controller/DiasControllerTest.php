<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\DiasController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\DiasController Test Case
 *
 * @link \App\Controller\DiasController
 */
class DiasControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Dias',
        'app.Disponibilitats',
        'app.Activitats',
        'app.Activitatsgrups',
        'app.Volantes',
        'app.ActivitatsDias',
        'app.ActivitatsgrupsDias',
        'app.DiasVolantes',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\DiasController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\DiasController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\DiasController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\DiasController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\DiasController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
