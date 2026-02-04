<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitatsColegiosFixture
 */
class ActivitatsColegiosFixture extends TestFixture
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
                'activitat_id' => 1,
                'colegio_id' => 1,
            ],
        ];
        parent::init();
    }
}
