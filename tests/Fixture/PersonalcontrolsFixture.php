<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersonalcontrolsFixture
 */
class PersonalcontrolsFixture extends TestFixture
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
                'tipoincidencia_id' => 1,
                'actor_id' => 1,
                'colegio_id' => 1,
                'descripc' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2026-02-10 11:04:13',
                'modified' => '2026-02-10 11:04:13',
                'comodin1' => 'Lorem ipsum dolor sit a',
                'comodin2' => 'Lorem ipsum dolor sit a',
            ],
        ];
        parent::init();
    }
}
