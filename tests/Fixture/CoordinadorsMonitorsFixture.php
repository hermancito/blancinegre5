<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoordinadorsMonitorsFixture
 */
class CoordinadorsMonitorsFixture extends TestFixture
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
                'coordinador_id' => 1,
                'monitor_id' => 1,
            ],
        ];
        parent::init();
    }
}
