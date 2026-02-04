<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpresastresFixture
 */
class EmpresastresFixture extends TestFixture
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
                'created' => '2026-02-04 12:06:52',
                'modified' => '2026-02-04 12:06:52',
            ],
        ];
        parent::init();
    }
}
