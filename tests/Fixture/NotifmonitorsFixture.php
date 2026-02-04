<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotifmonitorsFixture
 */
class NotifmonitorsFixture extends TestFixture
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'descripc' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'photo' => 'Lorem ipsum dolor sit amet',
                'photo_dir' => 'Lorem ipsum dolor sit amet',
                'validado' => 1,
                'comodin' => 'Lorem ipsum dolor sit amet',
                'tipo_monitor' => 'Lorem ipsum d',
                'created' => '2026-02-04 11:31:44',
                'modified' => '2026-02-04 11:31:44',
            ],
        ];
        parent::init();
    }
}
