<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitatsgrupsDiasFixture
 */
class ActivitatsgrupsDiasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'activitatsgrup_id' => 1,
                'dia_id' => 1,
                'hora_ini' => '13:05:33',
                'hora_fin' => '13:05:33',
            ],
        ];
        parent::init();
    }
}
