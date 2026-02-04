<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SustitucionsFixture
 */
class SustitucionsFixture extends TestFixture
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
                'fecha' => '2026-02-04',
                'hora_ini' => '12:12:09',
                'hora_fin' => '12:12:09',
                'monitor_id' => 1,
                'colegio_id' => 1,
                'activitat_id' => 1,
                'coste' => 1,
                'justificada' => 1,
                'motivo' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'salario' => 1,
                'created' => '2026-02-04 12:12:09',
                'modified' => '2026-02-04 12:12:09',
                'comodin1' => 'Lorem ipsum dolor sit a',
                'comodin2' => 'Lorem ipsum dolor sit a',
            ],
        ];
        parent::init();
    }
}
