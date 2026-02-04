<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ColegiofilesFixture
 */
class ColegiofilesFixture extends TestFixture
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
                'colegio_id' => 1,
                'file' => 'Lorem ipsum dolor sit amet',
                'file_dir' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-02-04',
                'modified' => '2026-02-04',
            ],
        ];
        parent::init();
    }
}
