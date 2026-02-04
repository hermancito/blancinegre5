<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoordinadorsFixture
 */
class CoordinadorsFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'tfno1' => 1,
                'tfno2' => 1,
                'nif' => 'Lorem i',
                'validado' => 1,
                'created' => '2026-02-04 12:02:39',
                'modified' => '2026-02-04 12:02:39',
            ],
        ];
        parent::init();
    }
}
