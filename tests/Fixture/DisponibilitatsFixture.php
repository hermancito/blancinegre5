<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DisponibilitatsFixture
 */
class DisponibilitatsFixture extends TestFixture
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
                'monitor_id' => 1,
                'dia_id' => 1,
                'hora_id' => 1,
                'tiponodisponibilitat_id' => 1,
                'activitatsgrup_id' => 1,
                'disponible' => 1,
                'created' => '2026-02-04 11:31:42',
                'modified' => '2026-02-04 11:31:42',
            ],
        ];
        parent::init();
    }
}
