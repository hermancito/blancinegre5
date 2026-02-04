<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JornadasgrupsFixture
 */
class JornadasgrupsFixture extends TestFixture
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
                'codigo' => 'Lorem ip',
                'anyo' => 1,
                'variac_ini' => 1,
                'variac_fin' => 1,
                'created' => '2026-02-04 12:08:10',
                'modified' => '2026-02-04 12:08:10',
            ],
        ];
        parent::init();
    }
}
