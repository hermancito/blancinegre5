<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotifcolegiosUsersFixture
 */
class NotifcolegiosUsersFixture extends TestFixture
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
                'notifcolegio_id' => 1,
                'user_id' => 1,
                'created' => '2026-02-04 11:31:44',
                'modified' => '2026-02-04 11:31:44',
            ],
        ];
        parent::init();
    }
}
