<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NotasFixture
 */
class NotasFixture extends TestFixture
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
                'comodin' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'activitat_id' => 1,
                'cuatrim' => 1,
                'anyo' => 1,
                'curso' => 'Lorem i',
                'objetivos' => 'Lor',
                'contenidos' => 'Lor',
                'atencion' => 'Lor',
                'participa' => 'Lor',
                'ejerc' => 'Lor',
                'asist' => 'Lor',
                'actitud' => 'Lor',
                'respeto' => 'Lor',
                'validado' => 1,
                'comentarios_boletin' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'contenidos_boletin' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2026-02-04 11:31:43',
                'modified' => '2026-02-04 11:31:43',
            ],
        ];
        parent::init();
    }
}
