<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotasUsersFixture
 */
class NotasUsersFixture extends TestFixture
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
                'nota_id' => 1,
                'user_id' => 1,
                'created' => '2026-02-04 11:31:43',
                'modified' => '2026-02-04 11:31:43',
            ],
        ];
        parent::init();
    }
}
