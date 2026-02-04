<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HorarimonitorsFixture
 */
class HorarimonitorsFixture extends TestFixture
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
                'fecha' => '2026-02-04',
                'hora' => '11:31:42',
                'inic_fin' => 'Lorem ip',
                'user_id' => 1,
                'latitud' => 'Lorem ipsum dolor sit amet',
                'longitud' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-02-04 11:31:42',
                'modified' => '2026-02-04 11:31:42',
            ],
        ];
        parent::init();
    }
}
