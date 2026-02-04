<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnosXmlFixture
 */
class AlumnosXmlFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'alumnos_xml';
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
                'xmlfile' => 'Lorem ipsum dolor sit amet',
                'xmlfile_dir' => 'Lorem ipsum dolor sit amet',
                'grabado' => 1,
            ],
        ];
        parent::init();
    }
}
