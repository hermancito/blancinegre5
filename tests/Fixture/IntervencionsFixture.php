<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IntervencionsFixture
 */
class IntervencionsFixture extends TestFixture
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
                'tipo_interv' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
