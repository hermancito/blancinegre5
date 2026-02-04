<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EventosFixture
 */
class EventosFixture extends TestFixture
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
                'dia' => '2026-02-04',
                'hora_ini' => '11:31:42',
                'hora_fin' => '11:31:42',
                'destino' => 'Lorem ipsum dolor sit amet',
                'observ' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'retribucion' => 1,
                'created' => '2026-02-04 11:31:42',
                'modified' => '2026-02-04 11:31:42',
                'comodin1' => 'Lorem ipsum dolor sit a',
                'comodin2' => 'Lorem ipsum dolor sit a',
            ],
        ];
        parent::init();
    }
}
