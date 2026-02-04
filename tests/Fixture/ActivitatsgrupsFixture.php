<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitatsgrupsFixture
 */
class ActivitatsgrupsFixture extends TestFixture
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
                'codigo' => 'Lorem ip',
                'activitat_id' => 1,
                'colegio_id' => 1,
                'aula' => 'Lorem i',
                'created' => '2026-02-04 11:53:59',
                'modified' => '2026-02-04 11:53:59',
                'comentarios' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'tipo_fijo' => 1,
                'tipo_vble' => 1,
                'sala_fijo' => 1,
                'sala_vble' => 1,
                'visible_familias' => 1,
                'descripc' => 'Lorem ipsum dolor sit amet',
                'aplicar_jornada' => 1,
                'alum_min' => 1,
                'alum_max' => 1,
                'fecha_inicio' => '2026-02-04',
                'fecha_fin' => '2026-02-04',
                'matricula' => 1,
            ],
        ];
        parent::init();
    }
}
