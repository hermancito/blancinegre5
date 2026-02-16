<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\PersonalcontrolsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\PersonalcontrolsController Test Case
 *
 * @link \App\Controller\PersonalcontrolsController
 */
class PersonalcontrolsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Personalcontrols',
        'app.Users',
        'app.Tipoincidencias',
        'app.Actors',
        'app.Colegios',
    ];

    /**
     * Test index method
     *
     * @return void
     * @link \App\Controller\PersonalcontrolsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @link \App\Controller\PersonalcontrolsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @link \App\Controller\PersonalcontrolsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @link \App\Controller\PersonalcontrolsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @link \App\Controller\PersonalcontrolsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
