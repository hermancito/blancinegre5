<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiasVolantesFixture
 */
class DiasVolantesFixture extends TestFixture
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
                'dia_id' => 1,
                'volante_id' => 1,
                'hora_ini' => '11:31:41',
                'hora_fin' => '11:31:41',
                'created' => '2026-02-04 11:31:41',
                'modified' => '2026-02-04 11:31:41',
            ],
        ];
        parent::init();
    }
}
