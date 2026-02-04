<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitatsDiasFixture
 */
class ActivitatsDiasFixture extends TestFixture
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
                'activitat_id' => 1,
                'dia_id' => 1,
                'hora_ini' => '11:31:13',
                'hora_fin' => '11:31:13',
            ],
        ];
        parent::init();
    }
}
