<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OfertasFixture
 */
class OfertasFixture extends TestFixture
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
                'comercial_id' => 1,
                'tipo_entidad' => 'Lorem ipsum dolor sit amet',
                'duracion_contrato' => 1,
                'fecha_firma' => '2026-02-10',
                'fecha_ini' => '2026-02-10',
                'proveedor_unico' => 'Lorem ipsum dolor sit amet',
                'ofertamos_medidodia' => 'Lorem ipsum dolor sit amet',
                'ofertamos_matinera' => 'Lorem ipsum dolor sit amet',
                'tipo_oferta' => 'Lorem ipsum dolor sit amet',
                'selecc_contrato' => 'Lorem ipsum dolor sit a',
                'ubicacion_id' => 1,
                'horario' => 'Lorem ipsum dolor sit amet',
                'importe' => 1,
                'created' => '2026-02-10 11:02:35',
                'modified' => '2026-02-10 11:02:35',
                'email_oferta' => 'Lorem ipsum dolor sit amet',
                'cif_oferta' => 'Lorem i',
            ],
        ];
        parent::init();
    }
}
