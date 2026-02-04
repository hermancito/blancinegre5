<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitatsgrupsMonitorsFixture
 */
class ActivitatsgrupsMonitorsFixture extends TestFixture
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
                'activitatsgrup_id' => 1,
                'monitor_id' => 1,
            ],
        ];
        parent::init();
    }
}
