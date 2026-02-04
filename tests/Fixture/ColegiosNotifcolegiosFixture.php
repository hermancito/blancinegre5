<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ColegiosNotifcolegiosFixture
 */
class ColegiosNotifcolegiosFixture extends TestFixture
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
                'colegio_id' => 1,
                'notifcolegio_id' => 1,
            ],
        ];
        parent::init();
    }
}
