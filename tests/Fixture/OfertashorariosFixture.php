<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OfertashorariosFixture
 */
class OfertashorariosFixture extends TestFixture
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
                'created' => '2026-02-04 12:09:45',
                'modified' => '2026-02-04 12:09:45',
            ],
        ];
        parent::init();
    }
}
