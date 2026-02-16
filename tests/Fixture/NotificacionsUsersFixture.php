<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotificacionsUsersFixture
 */
class NotificacionsUsersFixture extends TestFixture
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
                'notificacion_id' => 1,
                'user_id' => 1,
                'created' => '2026-02-10 11:00:56',
                'modified' => '2026-02-10 11:00:56',
            ],
        ];
        parent::init();
    }
}
