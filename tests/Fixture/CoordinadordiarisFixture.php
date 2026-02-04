<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CoordinadordiarisFixture
 */
class CoordinadordiarisFixture extends TestFixture
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
                'coordinador_id' => 1,
                'dia' => '2026-02-04',
                'hora_ini' => '11:31:40',
                'hora_fin' => '11:31:40',
                'intervencion_id' => 1,
                'observ' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2026-02-04 11:31:40',
                'modified' => '2026-02-04 11:31:40',
                'resuelta' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
