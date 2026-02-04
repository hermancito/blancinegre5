<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitatsMonitorsActivitatsgrupsFixture
 */
class ActivitatsMonitorsActivitatsgrupsFixture extends TestFixture
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
                'activitats_monitor_id' => 1,
                'activitatsgrup_id' => 1,
            ],
        ];
        parent::init();
    }
}
