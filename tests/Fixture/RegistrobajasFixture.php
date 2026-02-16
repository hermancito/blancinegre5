<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RegistrobajasFixture
 */
class RegistrobajasFixture extends TestFixture
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
                'alumno_id' => 1,
                'activitatsgrup_id' => 1,
                'colegio_id' => 1,
                'fecha_baja' => '2026-02-10',
                'motivo' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-02-10 11:05:15',
                'modified' => '2026-02-10 11:05:15',
                'observ' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'ejecutada' => 1,
            ],
        ];
        parent::init();
    }
}
