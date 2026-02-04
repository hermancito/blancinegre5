<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OfertasOfertaspreciosactsFixture
 */
class OfertasOfertaspreciosactsFixture extends TestFixture
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
                'ofertaspreciosact_id' => 1,
                'oferta_id' => 1,
                'ofertashorario_id' => 1,
                'created' => '2026-02-04 11:31:45',
                'modified' => '2026-02-04 11:31:45',
                'horario' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
