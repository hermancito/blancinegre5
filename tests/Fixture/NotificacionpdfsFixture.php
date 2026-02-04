<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotificacionpdfsFixture
 */
class NotificacionpdfsFixture extends TestFixture
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
                'user_id' => 1,
                'notificacion_id' => 1,
                'pdf' => 'Lorem ipsum dolor sit amet',
                'pdf_dir' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
