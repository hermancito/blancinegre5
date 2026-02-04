<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiasFixture
 */
class DiasFixture extends TestFixture
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
                'nombre' => 'Lor',
                'descripc' => 'Lorem ipsum dolor ',
            ],
        ];
        parent::init();
    }
}
