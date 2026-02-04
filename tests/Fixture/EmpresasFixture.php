<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpresasFixture
 */
class EmpresasFixture extends TestFixture
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
                'nom_empresa' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-02-04 12:05:50',
                'modified' => '2026-02-04 12:05:50',
            ],
        ];
        parent::init();
    }
}
