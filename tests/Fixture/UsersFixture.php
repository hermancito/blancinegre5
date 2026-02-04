<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'photo' => 'Lorem ipsum dolor sit amet',
                'photo_dir' => 'Lorem ipsum dolor sit amet',
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellidos' => 'Lorem ipsum dolor sit amet',
                'tfno1' => 1,
                'tfno2' => 1,
                'nif' => 'Lorem i',
                'validado' => 1,
                'bolsa' => 1,
                'created' => '2026-02-04 13:04:17',
                'modified' => '2026-02-04 13:04:17',
                'datos' => 1,
                'info_mail' => 1,
                'sexo' => 'Lorem ip',
                'seg_soc' => 'Lorem ipsum dolor ',
                'iban' => 'Lo',
                'cuenta' => 'Lorem ipsum dolor ',
                'direccion' => 'Lorem ipsum dolor sit amet',
                'poblacion' => 'Lorem ipsum dolor sit amet',
                'cod_postal' => 'Lor',
                'contrato' => 'Lorem ipsum dolor sit amet',
                'fecha_ant' => '2026-02-04',
                'carnet_cond' => 1,
                'vehiculo' => 'Lorem ipsum dolor sit amet',
                'titulaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'observ' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'certif_antec' => '2026-02-04',
                'mutua' => '2026-02-04',
                'colegio_id' => 1,
                'token' => 'Lorem ipsum dolor sit amet',
                'fecha_nac' => '2026-02-04',
                'token_dispositivo' => 'Lorem ipsum dolor sit amet',
                'niv_ingles' => 'Lor',
                'niv_valencia' => 'Lor',
                'disponib' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
