<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComercialsarxiusFixture
 */
class ComercialsarxiusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'comercialsarxius';
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
                'comercial_id' => 1,
                'pdf' => 'Lorem ipsum dolor sit amet',
                'pdf_dir' => 'Lorem ipsum dolor sit amet',
                'created' => '2026-02-05 13:17:04',
                'modified' => '2026-02-05 13:17:04',
            ],
        ];
        parent::init();
    }
}
