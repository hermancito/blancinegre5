<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UbicacionsFixture
 */
class UbicacionsFixture extends TestFixture
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
                'intervalo' => 'Lorem ipsum dolor sit amet',
                'accion' => 'Lorem ipsum dolor sit amet',
                'importe' => 1,
                'created' => '2026-02-04 12:14:19',
                'modified' => '2026-02-04 12:14:19',
            ],
        ];
        parent::init();
    }
}
