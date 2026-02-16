<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OfertasTipsFixture
 */
class OfertasTipsFixture extends TestFixture
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
                'oferta_id' => 1,
                'tip_id' => 1,
                'created' => '2026-02-10 11:03:31',
                'modified' => '2026-02-10 11:03:31',
            ],
        ];
        parent::init();
    }
}
