<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SalariosFixture
 */
class SalariosFixture extends TestFixture
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
                'sala_fijo' => 1,
                'sala_vble' => 1,
                'plus_var' => 1,
                'complemento' => 1,
                'dietas' => 1,
                'eventos' => 1,
                'it' => 1,
                'absentismo' => 1,
                'dto' => 1,
                'nomina' => 1,
                'created' => '2026-02-04 11:31:46',
                'modified' => '2026-02-04 11:31:46',
            ],
        ];
        parent::init();
    }
}
