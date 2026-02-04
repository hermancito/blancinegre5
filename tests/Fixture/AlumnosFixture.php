<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlumnosFixture
 */
class AlumnosFixture extends TestFixture
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
                'user2_id' => 1,
                'coleg_id' => 1,
                'codigo' => 'Lorem ipsum dolor ',
                'nombre_apellidos' => 'Lorem ipsum dolor sit amet',
                'anyo' => 1,
                'tfno' => 1,
                'movil' => 1,
                'activo' => 1,
                'socio' => 1,
                'created' => '2026-02-04 11:31:30',
                'modified' => '2026-02-04 11:31:30',
                'email' => 'Lorem ipsum dolor sit amet',
                'cuenta' => 'Lorem ipsum dolor ',
                'iban' => 'Lo',
                'titular' => 'Lorem ipsum dolor sit amet',
                'nif' => 'Lorem ipsum dolor ',
                'cobro' => 'Lorem ipsum d',
                'recibo' => 1,
                'material' => 'Lorem ipsum dolor sit amet',
                'coment_pub' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'coment_priv' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'ampa' => 1,
                'eliminado' => 1,
                'comedor' => 1,
                'datos' => 1,
                'info_mail' => 1,
                'comodin' => 'Lorem ip',
                'curso' => 'Lo',
                'matricula' => 1,
                'no_socio' => 1,
                'suplemento' => 1,
                'dto_fijo' => 1,
                'dto_porcentaje' => 1,
                'suma_pfijo' => 1,
                'suma_pvble' => 1,
                'cuota_previa' => 1,
                'cuota' => 1,
                'nif_alumno' => 'Lorem ipsum dolor ',
                'merito1' => 'Lorem ipsum dolor sit amet',
                'merito2' => 'Lorem ipsum dolor sit amet',
                'merito3' => 'Lorem ipsum dolor sit amet',
                'merito4' => 'Lorem ipsum dolor sit amet',
                'merito5' => 'Lorem ipsum dolor sit amet',
                'ingles_3a' => 'Lore',
                'ingles_4a' => 'Lore',
                'ingles_5a' => 'Lore',
                'ingles_g1' => 'Lore',
                'ingles_g2' => 'Lore',
                'ingles_g3' => 'Lore',
                'ingles_g4' => 'Lore',
                'ingles_g5' => 'Lore',
                'ingles_g6' => 'Lore',
                'ingles_g7' => 'Lore',
                'ingles_g8' => 'Lore',
                'ingles_g9' => 'Lore',
                'impago' => 1,
                'texto_impago' => 'Lorem ipsum dolor sit amet',
                'sip' => 'Lorem ',
            ],
        ];
        parent::init();
    }
}
