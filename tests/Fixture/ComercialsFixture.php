<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComercialsFixture
 */
class ComercialsFixture extends TestFixture
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
                'nom_centro' => 'Lorem ipsum dolor sit amet',
                'localidad' => 'Lorem ipsum dolor sit amet',
                'agente_id' => 1,
                'estado' => 'Lorem ipsum dolor sit amet',
                'jornada' => 'Lorem ipsum dolor sit amet',
                'pax' => 1,
                'control_admon' => 'Lorem ipsum dolor sit amet',
                'comarca' => 'Lorem ipsum dolor sit amet',
                'tipo_via' => 'Lorem ip',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'num' => 'Lorem ipsum dolor ',
                'cp' => 'Lor',
                'provincia' => 'Lorem ipsum dolor sit amet',
                'tfno' => 'Lorem i',
                'fax' => 'Lorem i',
                'cif' => 'Lorem ipsum dolor ',
                'gestion_actual' => 'Lorem ipsum dolor sit amet',
                'email_centro' => 'Lorem ipsum dolor sit amet',
                'contacto1_cargo' => 'Lorem ipsum dolor sit amet',
                'contacto1_nom_tfno' => 'Lorem ipsum dolor sit amet',
                'contacto1_mail' => 'Lorem ipsum dolor sit amet',
                'contacto2_cargo' => 'Lorem ipsum dolor sit amet',
                'contacto2_nom_tfno' => 'Lorem ipsum dolor sit amet',
                'contacto2_mail' => 'Lorem ipsum dolor sit amet',
                'contacto3_datos' => 'Lorem ipsum dolor sit amet',
                'matinal' => 1,
                'mediodia' => 1,
                'j_continua' => 1,
                'tardes' => 1,
                'jun_sept' => 1,
                'vacacionales' => 1,
                'plant_comercial' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'historial_citas_observ' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'ini_cto' => 'Lo',
                'ini_cto_agente' => 'Lorem ipsum dolor sit amet',
                'fin_cto' => 'Lo',
                'fin_cto_agente' => 'Lorem ipsum dolor sit amet',
                'empresa_id' => 1,
                'empresados_id' => 1,
                'empresatres_id' => 1,
                'created' => '2026-02-04 11:31:40',
                'modified' => '2026-02-04 11:31:40',
            ],
        ];
        parent::init();
    }
}
