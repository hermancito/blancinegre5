<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AsistenciasFixture
 */
class AsistenciasFixture extends TestFixture
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
                'alumno_id' => 1,
                'activitatsgrup_id' => 1,
                'created' => '2026-02-04',
                'modified' => '2026-02-04',
            ],
        ];
        parent::init();
    }
}
