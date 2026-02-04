<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ColegiosFixture
 */
class ColegiosFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor sit amet',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'cp' => 'Lor',
                'poblacion' => 'Lorem ipsum dolor sit amet',
                'eq_directivo' => 'Lorem ipsum dolor sit amet',
                'tfno_eqdirect' => 1,
                'email_eqdirectivo' => 'Lorem ipsum dolor sit amet',
                'pdte_ampa' => 'Lorem ipsum dolor sit amet',
                'tfno_pdte' => 1,
                'email_pdte' => 'Lorem ipsum dolor sit amet',
                'resp_act' => 'Lorem ipsum dolor sit amet',
                'tfno_resp' => 1,
                'email_resp' => 'Lorem ipsum dolor sit amet',
                'conserge' => 'Lorem ipsum dolor sit amet',
                'tfno_conserge' => 1,
                'email_conserge' => 'Lorem ipsum dolor sit amet',
                'email_centro' => 'Lorem ipsum dolor sit amet',
                'cif_centro' => 'Lorem ipsum dolor ',
                'email_ampa' => 'Lorem ipsum dolor sit amet',
                'cif_ampa' => 'Lorem ipsum dolor ',
                'cesion_llaves' => 'Lorem ipsum dolor sit amet',
                'unidades_llaves' => 1,
                'alarma' => 'Lorem ipsum dolor sit amet',
                'iban_centro' => 'Lorem ipsum dolor sit ',
                'iban_ampa' => 'Lorem ipsum dolor sit ',
                'observ' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2026-02-04 11:53:47',
                'modified' => '2026-02-04 11:53:47',
                'tablaspreciosvble_id' => 1,
                'suplemento_nosocios' => 1,
                'porcentaje_nosocios' => 1,
                'mostrar_cuota' => 1,
                'dcto_hermanos' => 1,
            ],
        ];
        parent::init();
    }
}
