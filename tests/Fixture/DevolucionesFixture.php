<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DevolucionesFixture
 */
class DevolucionesFixture extends TestFixture
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
                'alumno_id' => 1,
                'importe' => 1,
                'concepto' => 'Lorem ipsum dolor sit amet',
                'actividad' => 'Lorem ipsum dolor sit amet',
                'observ' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'fecha_dev' => '2026-02-04',
                'created' => '2026-02-04 11:31:41',
                'modified' => '2026-02-04 11:31:41',
            ],
        ];
        parent::init();
    }
}
